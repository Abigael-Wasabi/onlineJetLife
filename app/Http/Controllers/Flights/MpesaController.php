<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SmoDav\Mpesa\Laravel\Facades\STK;

class MpesaController extends Controller
{
    public function stkPush(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'phone' => 'required|string',
            'amount' => 'required|numeric',
            'order_id' => 'required|integer',
        ]);

        $phone = $validated['phone'];
        $amount = (int) $validated['amount'];
        $order_id = $validated['order_id'];

        // Check if the order exists
        $orderExists = Order::find($order_id);
        if (!$orderExists) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        try {
            $response = STK::request($amount)
                ->from($phone)
                ->usingReference('Order', $order_id)
                ->push();

            // Save the payment record
            Payment::create([
                'order_id' => $order_id,
                'MerchantRequestID' => $response->MerchantRequestID,
                'CheckoutRequestID' => $response->CheckoutRequestID,
                'ResponseCode' => $response->ResponseCode,
                'ResponseDescription' => $response->ResponseDescription,
                'CustomerMessage' => $response->CustomerMessage
            ]);

            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function callback(Request $request): JsonResponse
    {
        // Log the callback response for debugging
        Log::info('M-Pesa Callback:', $request->all());

        // Validate and extract the callback data
        $callbackData = $request->get('Body')['stkCallback'];

        $checkoutRequestId = $callbackData['CheckoutRequestID'];
        $resultCode = $callbackData['ResultCode'];
        $resultDesc = $callbackData['ResultDesc'];

        // Find the payment record using CheckoutRequestID
        $payment = Payment::where('CheckoutRequestID', $checkoutRequestId)->first();

        if ($payment) {
            // Update the payment record with the callback data
            $payment->update([
                'ResultCode' => $resultCode,
                'ResultDesc' => $resultDesc,
                'Amount' => $callbackData['CallbackMetadata']['Item'][0]['Value'] ?? null,
                'MpesaReceiptNumber' => $callbackData['CallbackMetadata']['Item'][1]['Value'] ?? null,
                'Balance' => $callbackData['CallbackMetadata']['Item'][2]['Value'] ?? null,
                'TransactionDate' => $callbackData['CallbackMetadata']['Item'][3]['Value'] ?? null,
                'PhoneNumber' => $callbackData['CallbackMetadata']['Item'][4]['Value'] ?? null
            ]);

            // If the transaction was successful, update the order status
            if ($resultCode == 0) {
                $payment->order->update(['order_status' => 'completed']);
            }
        }

        return response()->json(['status' => 'success'], 200);
    }
}
