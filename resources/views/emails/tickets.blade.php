<!DOCTYPE html>
<html>
<head>
    <title>E-Ticket</title>
</head>
<body>
<h1>Please find attached your e-ticket.</h1>
<p><strong>Passenger Details:</strong></p>
<ul>
    <li>Name: {{ $passenger['name'] }}</li>
    <li>Email: {{ $passenger['email'] }}</li>
</ul>
<p><strong>Flight Information:</strong></p>
<ul>
    <li>Flight Number: {{ $flight['number'] }}</li>
    <li>Departure: {{ $flight['departure'] }}</li>
    <li>Arrival: {{ $flight['arrival'] }}</li>
</ul>
<p><strong>Booking Details:</strong></p>
<ul>
    <li>Booking Reference: {{ $booking['reference'] }}</li>
    <li>Status: {{ $booking['status'] }}</li>
</ul>
<p><strong>Travel Itinerary:</strong></p>
<ul>
    @foreach($itinerary as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
<p><strong>Additional Services:</strong></p>
<ul>
    @foreach($services as $service)
        <li>{{ $service }}</li>
    @endforeach
</ul>
</body>
</html>
