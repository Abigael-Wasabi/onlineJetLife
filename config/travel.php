<?php

/*return [
    'pages_name' => [
        'home' => [
            'seo_name' => qt_lang('Home'),
            'label' => qt_lang('Home'),
            'screen' => 'home',
            'sitemap' => false
        ],
        'flights' => [
            'seo_name' => qt_lang('Flights'),
            'label' => qt_lang('Flights'),
            'screen' => 'flights',
            'sitemap' => true
        ],
        'stays' => [
            'seo_name' => qt_lang('Stays'),
            'label' => qt_lang('Stays'),
            'screen' => 'stays',
            'sitemap' => true
        ],
        'hotels' => [
            'seo_name' => qt_lang('Search thousands of hotels & apartments in more than 400 cities'),
            'label' => qt_lang('Hotels'),
            'screen' => 'hotels',
            'sitemap' => true
        ],
        'excursions' => [
            'seo_name' => qt_lang('Book these experiences for a close-up look at your next destination'),
            'label' => qt_lang('Excursions'),
            'screen' => 'excursions',
            'sitemap' => true
        ],
        'experiences' => [
            'seo_name' => qt_lang(' One-of-a-kind  deals & experiences for the festives'),
            'label' => qt_lang('Holiday Deals'),
            'screen' => 'experiences',
            'sitemap' => true
        ],
        'transfers' => [
            'seo_name' => qt_lang('Cheap Rental Cars'),
            'label' => qt_lang('Transfers'),
            'screen' => 'transfers',
            'sitemap' => true
        ],
        'visa' => [
            'seo_name' => qt_lang('Explore UAE Visa Services'),
            'label' => qt_lang('Visa'),
            'screen' => 'visa',
            'sitemap' => true
        ],
        'flights_search_results' => [
            'seo_name' => qt_lang('Flights'),
            'label' => qt_lang('Search Flights'),
            'screen' => 'flights-search-result',
            'sitemap' => false
        ],
        'home_search_results' => [
            'seo_name' => qt_lang('Search Stays'),
            'label' => qt_lang('Search Stays'),
            'screen' => 'home-search-result',
            'sitemap' => true
        ],
        'experience_search_results' => [
            'seo_name' => qt_lang('Search Deals'),
            'label' => qt_lang('Search Deals'),
            'screen' => 'experience-search-result',
            'sitemap' => true
        ],
        'visa_search_results' => [
            'seo_name' => qt_lang('Search Visa'),
            'label' => qt_lang('Search Visa'),
            'screen' => 'visa-search-result',
            'sitemap' => true
        ],
        'hotels_search_results' => [
            'seo_name' => qt_lang('Search Hotels'),
            'label' => qt_lang('Search Hotels'),
            'screen' => 'hotels-search-result',
            'sitemap' => true
        ],
        'car_search_results' => [
            'seo_name' => qt_lang('Search Transfers'),
            'label' => qt_lang('Search Transfers'),
            'screen' => 'car-search-result',
            'sitemap' => true
        ],
        'contact' => [
            'seo_name' => qt_lang('Contact Us'),
            'label' => qt_lang('Contact Us'),
            'screen' => 'contact-us',
            'sitemap' => true
        ],
        'blog' => [
            'seo_name' => qt_lang('Blog'),
            'label' => qt_lang('Blog'),
            'screen' => 'blog',
            'sitemap' => true
        ],
        'category' => [
            'seo_name' => qt_lang('Category'),
            'label' => qt_lang('Category'),
            'screen' => 'category',
            'sitemap' => true,
            'seo_page' => false
        ],
        'tag' => [
            'seo_name' => qt_lang('Tag'),
            'label' => qt_lang('Tag'),
            'screen' => 'tag',
            'sitemap' => true,
            'seo_page' => false
        ],
        'become-a-host' => [
            'seo_name' => qt_lang('Partner with Us'),
            'label' => qt_lang('Partner with Us'),
            'screen' => 'become-a-host',
            'sitemap' => false
        ],
        'thank-you' => [
            'seo_name' => qt_lang('Thank you Page'),
            'label' => qt_lang('Thank for using our service'),
            'screen' => 'thank-you',
            'sitemap' => false
        ],
        'thank-you-post' => [
            'seo_name' => qt_lang('Thank you Page'),
            'label' => qt_lang('Thank for using our service'),
            'screen' => 'thank-you',
            'sitemap' => false,
            'seo_page' => false
        ],
        'check-out' => [
            'seo_name' => qt_lang('Checkout'),
            'label' => qt_lang('Checkout'),
            'screen' => 'check-out',
            'sitemap' => false
        ],
        'welcome-user' => [
            'seo_name' => qt_lang('Welcome new User'),
            'label' => qt_lang('You have successfully registered an account'),
            'screen' => 'welcome-user',
            'sitemap' => false
        ]
    ],
    'menu_location' => [
        'primary' => qt_lang('Primary')
    ],
    'post_types' => [
        'flights' => [
            'name' => qt_lang('Flight'),
            'names' => qt_lang('Flights'),
            'slug' => 'flights',
            'search_slug' => 'flights-search-result',
            'default_search_slug' => 'flights',
            'booking_slug' => 'booking',
            'only_search_form' => false,
        ],
        'home' => [
            'name' => qt_lang('Stay'),
            'names' => qt_lang('Stays'),
            'slug' => 'stay',
            'search_slug' => 'stays-search-result',
            'only_search_form' => false,
        ],
        'hotels' => [
            'name' => qt_lang('Hotels'),
            'names' => qt_lang('Hotels'),
            'slug' => 'hotels',
            'search_slug' => 'hotels-search-result',
            'only_search_form' => false,
            'show_frontend_form' => true,
        ],
        'excursions' => [
            'name' => qt_lang('Excursions'),
            'names' => qt_lang('Excursions'),
            'slug' => 'excursions',
            'search_slug' => 'excursions-search-result',
            'only_search_form' => false,
            'show_frontend_form' => true,
        ],
        'experience' => [
            'name' => qt_lang('Deal'),
            'names' => qt_lang('Deals'),
            'slug' => 'deals',
            'search_slug' => 'deals-search-result',
            'only_search_form' => false
        ],
        'car' => [
            'name' => qt_lang('Transfer'),
            'names' => qt_lang('Transfers'),
            'slug' => 'transfers',
            'search_slug' => 'transfers-search-result',
            'only_search_form' => false,
        ],
        'visa' => [
            'name' => qt_lang('Visa'),
            'names' => qt_lang('Visas'),
            'slug' => 'visa',
            'search_slug' => 'visa-search-result',
            'only_search_form' => false,
            'hide_search_form' => true
        ],
        'post' => [
            'name' => qt_lang('Post'),
            'names' => qt_lang('Posts'),
            'slug' => 'post'
        ],
        'page' => [
            'name' => qt_lang('Page'),
            'names' => qt_lang('Pages'),
            'slug' => 'page'
        ],
    ],
    'payment_gateways' => [
        'mpesa' => 'Mpesa',
        'bank_transfer' => 'BankTransfer',
        'bank_transfer_usd' => 'BankTransferUSD',
        'paypal' => 'Paypal',
        'stripe' => 'Stripe'
    ],
    'page_status' => [
        'publish' => [
            'name' => qt_lang('Publish')
        ],
        'draft' => [
            'name' => qt_lang('Draft')
        ],
        'trash' => [
            'name' => qt_lang('Trash')
        ]
    ],
    'post_status' => [
        'publish' => [
            'name' => qt_lang('Publish')
        ],
        'draft' => [
            'name' => qt_lang('Draft')
        ],
        'trash' => [
            'name' => qt_lang('Trash')
        ]
    ],
    'service_status' => [
        'publish' => [
            'name' => qt_lang('Publish')
        ],
        'pending' => [
            'name' => qt_lang('Pending')
        ],
        'draft' => [
            'name' => qt_lang('Draft')
        ],
        'trash' => [
            'name' => qt_lang('Trash')
        ]
    ],
    'payout_status' => [
        'pending' => [
            'name' => qt_lang('Pending')
        ],
        'completed' => [
            'name' => qt_lang('Completed')
        ]
    ],
    'booking_status' => [
        'pending' => [
            'label' => qt_lang('Pending'),
            'icon' => 'fe-alert-triangle',
            'payment_text' => qt_lang('Your payment has not been confirmed')
        ],
        'incomplete' => [
            'label' => qt_lang('Incomplete'),
            'icon' => 'fe-alert-circle',
            'payment_text' => qt_lang('Your payment is processing')
        ],
        'completed' => [
            'label' => qt_lang('Completed'),
            'icon' => 'fe-check-circle',
            'payment_text' => qt_lang('Your payment was successful')
        ],
        'canceled' => [
            'label' => qt_lang('Canceled'),
            'icon' => 'fe-x-circle',
            'payment_text' => qt_lang('Your payment has been canceled')
        ],
        'refunded' => [
            'label' => qt_lang('Refunded'),
            'icon' => 'fe-x-circle',
            'payment_text' => qt_lang('Your payment has been refunded')
        ],
    ],
    'user_roles' => [
        'administrator' => qt_lang('Administrator'),
        'partner' => qt_lang('Partner'),
        'customer' => qt_lang('Customer'),
    ],
    'checkout_slug' => 'checkout',
    'mpesa_payment_slug' => 'mpesa/payment',
    'flight_checkout_slug' => 'flights/checkout',
    'after_checkout_slug' => 'thank-you',
    'prefix_dashboard' => 'dashboard',
    'prefix_auth' => 'auth',
    'key_encrypt' => 'hh',
    'date_format' => 'm-d-Y',
    'time_format' => 'h:i A',
    'media_size' => [
        'large' => [1200, 900],
        'medium' => [800, 600],
        'small' => [400, 300]
    ],
    'media_uploads' => [
        'admin' => [
            'type' => ['image/png', 'image/jpg', 'image/jpeg', 'image/svg+xml', 'image/svg', 'image/gif'],
            'size' => 2,// only support Mb
            'message' => [
                'type' => qt_lang('Only JPG, PNG, JPEG, SVG, GIF files types are supported.'),
                'size' => qt_lang('Maximum file size is 2MB.')
            ]
        ],
        'partner' => [
            'type' => ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'],
            'size' => 2,
            'message' => [
                'type' => qt_lang('Only JPG, PNG, JPEG, GIF files types are supported.'),
                'size' => qt_lang('Maximum file size is 2MB.')
            ]
        ],
        'customer' => [
            'type' => ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'application/pdf'],
            'size' => 2,
            'message' => [
                'type' => qt_lang('Only JPG, PNG, JPEG, GIF, PDF files types are supported.'),
                'size' => qt_lang('Maximum file size is 2MB.')
            ]
        ],
    ],
    'posts_per_page' => 12,
    'comments_per_page' => 10,
    'gender' => [
        'male' => qt_lang('Male'),
        'female' => qt_lang('Female'),
        'other' => qt_lang('Prefer not to say'),
    ],
    'admin_menu' => [
        [
            'type' => 'heading',
            'label' => qt_lang('General'),
            'id' => 'heading-general'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Dashboard'),
            'icon' => '001_dashboard',
            'screen' => 'dashboard',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Your Profile'),
            'icon' => '011_user_1',
            'screen' => 'profile',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Notifications'),
            'icon' => '003_error',
            'screen' => 'all-notifications',
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Posts'),
            'icon' => '004_post',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Post'),
                    'screen' => 'add-new-post',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Post'),
                    'screen' => 'edit-post',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('All Posts'),
                    'screen' => 'all-post',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Categories'),
                    'screen' => 'get-terms/post-category',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Tags'),
                    'screen' => 'get-terms/post-tag',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Comments'),
                    'screen' => 'comment',
                ]
            ],
            'screen' => ['all-post', 'edit-post', 'add-new-post', 'get-terms/post-category', 'get-terms/post-tag', 'comment']
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Pages'),
            'icon' => '005_website',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('All Pages'),
                    'screen' => 'all-page',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Page'),
                    'screen' => 'edit-page',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Page'),
                    'screen' => 'add-new-page',
                ]
            ],
            'screen' => ['all-page', 'edit-page', 'add-new-page']
        ],
        [
            'type' => 'heading',
            'services' => ['car', 'home', 'experience', 'visa'],
            'label' => qt_lang('All Services'),
            'id' => 'heading-services'
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Stays'),
            'service' => 'home',
            'icon' => '006_home',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Home'),
                    'screen' => 'add-new-home',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('My Homes'),
                    'screen' => 'my-home',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Home'),
                    'screen' => 'edit-home',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Reviews'),
                    'screen' => 'review/home',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Types'),
                    'screen' => 'get-terms/home-type',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Amenity Types'),
                    'screen' => 'get-terms/home-amenity-type',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Amenities'),
                    'screen' => 'get-terms/home-amenity',
                ],
            ],
            'screen' => ['add-new-home', 'my-home', 'edit-home', 'review/home', 'get-terms/home-type', 'get-terms/home-amenity']
        ],

        [
            'type' => 'parent',
            'label' => qt_lang('Deals'),
            'service' => 'experience',
            'icon' => '001_tour',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Experience'),
                    'screen' => 'add-new-experience',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('My Experiences'),
                    'screen' => 'my-experience',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Experience'),
                    'screen' => 'edit-experience',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Reviews'),
                    'screen' => 'review/experience',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Types'),
                    'screen' => 'get-terms/experience-type',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Deal Types'),
                    'screen' => 'get-terms/experience-tour-type',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Residence Types'),
                    'screen' => 'get-terms/experience-residence-type',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Languages'),
                    'screen' => 'get-terms/experience-languages',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Room Types'),
                    'screen' => 'get-terms/experience-rooms',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Inclusions'),
                    'screen' => 'get-terms/experience-inclusions',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Exclusions'),
                    'screen' => 'get-terms/experience-exclusions',
                ],
            ],
            'screen' => ['add-new-experience', 'my-experience', 'edit-experience', 'review/experience', 'get-terms/experience-type', 'get-terms/experience-tour-type', 'get-terms/experience-residence-type', 'get-terms/experience-languages', 'get-terms/experience-inclusions', 'get-terms/experience-exclusions']
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Transfers'),
            'service' => 'car',
            'icon' => '003_steering_wheel',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Car'),
                    'screen' => 'add-new-car',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('My Cars'),
                    'screen' => 'my-car',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Car'),
                    'screen' => 'edit-car',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Types'),
                    'screen' => 'get-terms/car-type',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Equipments'),
                    'screen' => 'get-terms/car-equipment',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Features'),
                    'screen' => 'get-terms/car-feature',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Reviews'),
                    'screen' => 'review/car',
                ],
            ],
            'screen' => ['add-new-car', 'my-car', 'edit-car', 'review/car', 'get-terms/car-type', 'get-terms/car-equipment', 'get-terms/car-feature']
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Visa'),
            'service' => 'visa',
            'icon' => '006_home',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Visa'),
                    'screen' => 'add-new-visa',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('All Visa'),
                    'screen' => 'my-visa',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Visa'),
                    'screen' => 'edit-visa',
                ],

                [
                    'type' => 'item',
                    'label' => qt_lang('Types'),
                    'screen' => 'get-terms/visa-type',
                ],

            ],
            'screen' => ['add-new-visa', 'my-visa', 'edit-visa', 'get-terms/visa-type']
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('Reservation'),
            'id' => 'heading-reservation'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Reservation'),
            'icon' => '007_bars',
            'screen' => 'all-booking',
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('System Setting'),
            'id' => 'heading-system-setting'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Settings'),
            'icon' => '008_settings',
            'screen' => 'settings',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Menus'),
            'icon' => '009_menu',
            'screen' => 'menus',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Media'),
            'icon' => '010_gallery',
            'screen' => 'media',
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Users'),
            'icon' => '002_user',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('All Users'),
                    'screen' => 'user-management',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Registration'),
                    'screen' => 'user-registration',
                ],
            ],
            'screen' => ['user-management', 'user-registration'],
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Coupons'),
            'icon' => '012_voucher',
            'screen' => 'coupon',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Payouts'),
            'icon' => 'transfer',
            'screen' => 'payout',
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('Tools'),
            'id' => 'heading-tools'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Languages'),
            'icon' => '001_language',
            'screen' => 'language',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Translation'),
            'icon' => '002_translation',
            'screen' => 'translation',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Addons'),
            'icon' => 'web_plugin',
            'screen' => 'addons',
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Advanced'),
            'id' => 'advanced',
            'icon' => '001_repair',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Import Font Icon'),
                    'screen' => 'import-fonts'
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Email Checker'),
                    'screen' => 'email-checker'
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('TinyPNG Compress'),
                    'screen' => 'tinypng-compress'
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Sitemap'),
                    'screen' => 'site-map'
                ]
            ],
            'screen' => ['import-fonts', 'email-checker', 'tinypng-compress']
        ],
        [
            'type' => 'item',
            'label' => qt_lang('APIs'),
            'icon' => '001_api',
            'screen' => 'api-settings'
        ]
    ],
    'partner_menu' => [
        [
            'type' => 'heading',
            'label' => qt_lang('General'),
            'id' => 'heading-general'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Dashboard'),
            'icon' => '001_dashboard',
            'screen' => 'dashboard',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Your Profile'),
            'icon' => '011_user_1',
            'screen' => 'profile',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Notifications'),
            'icon' => '003_error',
            'screen' => 'all-notifications',
        ],
        [
            'type' => 'heading',
            'services' => ['car', 'home', 'experience'],
            'label' => qt_lang('All Services'),
            'id' => 'heading-services'
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Stay'),
            'service' => 'home',
            'icon' => '006_home',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Stay'),
                    'screen' => 'add-new-home',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('My Stays'),
                    'screen' => 'my-home',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Stay'),
                    'screen' => 'edit-home',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Reviews'),
                    'screen' => 'review/home',
                ],
            ],
            'screen' => ['add-new-home', 'my-home', 'edit-home', 'review/home']
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Deals'),
            'service' => 'experience',
            'icon' => '001_tour',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Deal'),
                    'screen' => 'add-new-experience',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('My Deal'),
                    'screen' => 'my-experience',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Deal'),
                    'screen' => 'edit-experience',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Reviews'),
                    'screen' => 'review/experience',
                ],
            ],
            'screen' => ['add-new-experience', 'my-experience', 'edit-experience', 'review/experience']
        ],
        [
            'type' => 'parent',
            'label' => qt_lang('Car'),
            'service' => 'car',
            'icon' => '003_steering_wheel',
            'child' => [
                [
                    'type' => 'item',
                    'label' => qt_lang('Add new Car'),
                    'screen' => 'add-new-car',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('My Cars'),
                    'screen' => 'my-car',
                ],
                [
                    'type' => 'hidden',
                    'label' => qt_lang('Edit Car'),
                    'screen' => 'edit-car',
                ],
                [
                    'type' => 'item',
                    'label' => qt_lang('Reviews'),
                    'screen' => 'review/car',
                ],
            ],
            'screen' => ['add-new-car', 'my-car', 'edit-car', 'review/car']
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('Reservation'),
            'id' => 'heading-reservation'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Reservation'),
            'icon' => '007_bars',
            'screen' => 'all-booking',
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('System Setting'),
            'id' => 'heading-system-setting'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Media'),
            'icon' => '010_gallery',
            'screen' => 'media',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Coupons'),
            'icon' => '012_voucher',
            'screen' => 'coupon',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Payouts'),
            'icon' => 'transfer',
            'screen' => 'payout',
        ],
    ],
    'customer_menu' => [
        [
            'type' => 'heading',
            'label' => qt_lang('General'),
            'id' => 'heading-general'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Dashboard'),
            'icon' => '001_dashboard',
            'screen' => 'dashboard',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Your Profile'),
            'icon' => '011_user_1',
            'screen' => 'profile',
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Notifications'),
            'icon' => '003_error',
            'screen' => 'all-notifications',
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('Booking Management'),
            'id' => 'heading-reservation'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Reservation'),
            'icon' => '007_bars',
            'screen' => 'all-booking',
        ],
        [
            'type' => 'heading',
            'label' => qt_lang('System Setting'),
            'id' => 'heading-system-setting'
        ],
        [
            'type' => 'item',
            'label' => qt_lang('Media'),
            'icon' => '010_gallery',
            'screen' => 'media',
        ],
    ],
    'home_settings' => [
        'sections' => [
            [
                'id' => 'detail_options',
                'label' => qt_lang('Details'),
            ],
            [
                'id' => 'location_options',
                'label' => qt_lang('Location'),
            ],
            [
                'id' => 'pricing_options',
                'label' => qt_lang('Pricing'),
            ],
            [
                'id' => 'gallery_options',
                'label' => qt_lang('Gallery'),
                'translation' => false
            ],
            [
                'id' => 'amenities_options',
                'label' => qt_lang('Amenities'),
            ],
            [
                'id' => 'policies_options',
                'label' => qt_lang('Policies'),
            ],
            [
                'id' => 'availability_options',
                'label' => qt_lang('Availability'),
                'translation' => false
            ],
        ],
        'fields' => [
            [
                'id' => 'post_title',
                'label' => qt_lang('Title'),
                'type' => 'text',
                'desc' => qt_lang('Enter a minimum of 6 characters'),
                'validation' => 'required:|min:6:m',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_slug',
                'label' => qt_lang('Permalink'),
                'type' => 'permalink',
                'post_type' => 'home',
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_content',
                'label' => qt_lang('Detail'),
                'type' => 'editor',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_description',
                'label' => qt_lang('Description'),
                'type' => 'textarea',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'is_featured',
                'label' => qt_lang('is Featured?'),
                'type' => 'on_off',
                'permission' => ['administrator'],//['administrator', 'partner', 'customer']
                'section' => 'detail_options'
            ],
            [
                'id' => 'booking_form',
                'label' => qt_lang('Booking Form'),
                'type' => 'select',
                'choices' => [
                    'instant' => qt_lang('Instant'),
                    'enquiry' => qt_lang('Enquiry'),
                    'instant_enquiry' => qt_lang('Instant & Enquiry')
                ],
                'std' => 'instant',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'home_type',
                'label' => qt_lang('Home Type'),
                'type' => 'select',
                'choices' => 'terms:home-type',
                'field_type' => 'taxonomy',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'style' => 'wide',
                'section' => 'detail_options'
            ],
            [
                'id' => 'number_of_guest',
                'label' => qt_lang('No. of Guest'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|integer',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'number_of_bedrooms',
                'label' => qt_lang('No. of Bedrooms'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|integer',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'number_of_bathrooms',
                'label' => qt_lang('No. of Bathrooms'),
                'type' => 'number',
                'minlength' => 0,
                'std' => 1,
                'validation' => 'required|integer',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'size',
                'label' => qt_lang('Size (m2/ft)'),
                'type' => 'text',
                'std' => 0,
                'validation' => 'required',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'min_stay',
                'label' => qt_lang('Min Stay'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|integer',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'max_stay',
                'label' => qt_lang('Max Stay'),
                'desc' => qt_lang('-1: Unlimited'),
                'type' => 'number',
                'minlength' => -1,
                'std' => -1,
                'validation' => 'required|integer',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'location',
                'label' => qt_lang('Location Settings'),
                'type' => 'location',
                'field_type' => 'location',
                'section' => 'location_options',
                'translation' => true
            ],
            [
                'id' => 'booking_type',
                'label' => qt_lang('Booking Type'),
                'type' => 'select',
                'choices' => [
                    'per_night' => qt_lang('Per Night'),
                    'per_hour' => qt_lang('Per Hour'),
                    'external_link' => qt_lang('External Link'),
                ],
                'std' => 'per_night',
                'style' => 'wide',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'base_price',
                'label' => qt_lang('Base Price'),
                'type' => 'text',
                'validation' => 'required',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'use_external_link',
                'label' => qt_lang('External Link'),
                'desc' => qt_lang('Set external link for home service'),
                'type' => 'text',
                'std' => '#',
                'layout' => 'col-12 col-md-6',
                'condition' => 'booking_type:is(external_link)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'text_external_link',
                'label' => qt_lang('Text External Link'),
                'type' => 'text',
                'std' => qt_lang('Check Out'),
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'condition' => 'booking_type:is(external_link)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'use_long_price',
                'label' => qt_lang('Long-term Pricing'),
                'desc' => qt_lang('Set different price for long stay 7+, 14+, 30+'),
                'type' => 'on_off',
                'std' => 'off',
                'break' => true,
                'condition' => 'booking_type:is(per_night)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'price_7_day',
                'label' => qt_lang('Price per 7+ days'),
                'desc' => qt_lang('Applies to groups 7 to less than 14 days'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'condition' => 'booking_type:is(per_night),use_long_price:is(on)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'price_14_day',
                'label' => qt_lang('Price per 14+ days'),
                'desc' => qt_lang('Applies to groups 14 to less than 30 days'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'condition' => 'booking_type:is(per_night),use_long_price:is(on)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'price_30_day',
                'label' => qt_lang('Price per 30+ days'),
                'desc' => qt_lang('Applies to groups 30+ days'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'section' => 'pricing_options',
                'condition' => 'booking_type:is(per_night),use_long_price:is(on)',
                'break' => true,
            ],
            [
                'id' => 'weekend_price',
                'label' => qt_lang('Weekend Price'),
                'type' => 'text',
                'desc' => qt_lang('Leave empty if it is the same with the base price'),
                'layout' => 'col-12 col-md-6',
                'section' => 'pricing_options',
            ],
            [
                'id' => 'weekend_to_apply',
                'label' => qt_lang('Days to apply weekend'),
                'type' => 'select',
                'choices' => [
                    'sun' => qt_lang('Sunday'),
                    'sat_sun' => qt_lang('Saturday & Sunday'),
                    'fri_sat_sun' => qt_lang('Friday & Saturday & Sunday'),
                ],
                'std' => 'sun',
                'style' => 'wide',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'enable_extra_guest',
                'label' => qt_lang('Enable Extra Guests'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'extra_guest_price',
                'label' => qt_lang('Extra Guest Price (per Person)'),
                'desc' => qt_lang('Apply extra price for number of guests'),
                'type' => 'text',
                'condition' => 'enable_extra_guest:is(on)',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'apply_to_guest',
                'label' => qt_lang('For each guests after'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'condition' => 'enable_extra_guest:is(on)',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'extra_services',
                'type' => 'list_item',
                'label' => qt_lang('Extra Services'),
                'bind_from' => 'extra_services_name___',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'translation' => true,
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'name_unique',
                        'label' => qt_lang('ID'),
                        'type' => 'unique',
                        'bind_from' => 'extra_services_name___',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'price',
                        'label' => qt_lang('Price'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'required',
                        'label' => qt_lang('Required'),
                        'type' => 'on_off',
                        'layout' => 'col-12 col-md-6',
                        'break' => true
                    ],
                ],
                'layout' => 'col-12',
                'break' => true,
                'section' => 'pricing_options',
                'translation' => true,
            ],
            [
                'id' => 'custom_price',
                'label' => qt_lang('Custom Price / Availability'),
                'desc' => qt_lang(' You can change price, availability by daily, weekly, monthly, ...'),
                'type' => 'price',
                'post_type' => 'home',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'amenities',
                'label' => qt_lang('Amenities'),
                'type' => 'checkbox',
                'choices' => 'terms:home-amenity',
                'field_type' => 'taxonomy',
                'style' => 'col',
                'section' => 'amenities_options'
            ],
            [
                'id' => 'gallery',
                'label' => qt_lang('Gallery'),
                'type' => 'media_advanced',
                'post_type' => 'home',
                'style' => [450, 320],
                'section' => 'gallery_options'
            ],
            [
                'id' => 'video',
                'label' => qt_lang('Video'),
                'desc' => qt_lang('Youtube, Vimeo, ...'),
                'type' => 'text',
                'section' => 'gallery_options'
            ],
            [
                'id' => 'enable_cancellation',
                'label' => qt_lang('Enable Cancellation'),
                'type' => 'on_off',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancel_before',
                'label' => qt_lang('Cancel Before (days)'),
                'type' => 'number',
                'minlength' => 0,
                'validation' => 'regex:^[0-9]{1,}$:m',
                'std' => 0,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancellation_detail',
                'label' => qt_lang('Cancellation Detail'),
                'type' => 'textarea',
                'translation' => true,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'alert_per_hour',
                'label' => qt_lang('Note'),
                'desc' => qt_lang('If you use Hourly booking, Check In and Check Out are used to set the available hours'),
                'type' => 'alert',
                'style' => 'info',
                'condition' => 'booking_type:is(per_hour)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'checkin_time',
                'type' => 'select',
                'label' => qt_lang('Check In'),
                'choices' => 'list:hour:30',
                'layout' => 'col-12 col-md-6',
                'style' => 'wide',
                'section' => 'policies_options'
            ],
            [
                'id' => 'checkout_time',
                'type' => 'select',
                'label' => qt_lang('Check Out'),
                'choices' => 'list:hour:30',
                'layout' => 'col-12 col-md-6',
                'style' => 'wide',
                'break' => true,
                'section' => 'policies_options'
            ],
            [
                'id' => 'availability',
                'label' => qt_lang('Availability'),
                'type' => 'availability',
                'excluded' => true,
                'post_type' => 'home',
                'break' => true,
                'section' => 'availability_options'
            ],
            [
                'id' => 'import_ical_url',
                'label' => qt_lang('Ical Sync'),
                'type' => 'list_item',
                'bind_from' => 'import_ical_url_name___',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Chanel'),
                        'type' => 'select',
                        'choices' => [
                            'Google' => qt_lang('Google Calendar'),
                            'Airbnb' => qt_lang('Airbnb Calendar'),
                            'HomeAway' => qt_lang('HomeAway Calendar'),
                            'Other' => qt_lang('Other Calendar'),
                        ],
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'ical_url',
                        'label' => qt_lang('Ical URL'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6'
                    ],
                ],
                'section' => 'availability_options'
            ],
            [
                'id' => 'ical_alert',
                'label' => qt_lang('Recommend'),
                'desc' => qt_lang('To use Ical Sync, you need to setup cron-job on your server.'),
                'type' => 'alert',
                'style' => 'info',
                'section' => 'availability_options'
            ],
            [
                'id' => 'export_ical_url',
                'label' => qt_lang('Export Ical'),
                'type' => 'ical',
                'post_type' => 'home',
                'section' => 'availability_options'
            ],
        ]
    ],
    'experience_settings' => [
        'sections' => [
            [
                'id' => 'detail_options',
                'label' => qt_lang('Details'),
            ],
            [
                'id' => 'location_options',
                'label' => qt_lang('Location'),
            ],
            [
                'id' => 'pricing_options',
                'label' => qt_lang('Pricing'),
            ],
            [
                'id' => 'gallery_options',
                'label' => qt_lang('Gallery'),
                'translation' => false
            ],
            [
                'id' => 'languages_options',
                'label' => qt_lang('Languages'),
            ],
            [
                'id' => 'inclusions_options',
                'label' => qt_lang('Inclusions / Exclusions'),
            ],
            [
                'id' => 'itinerary_options',
                'label' => qt_lang('Itinerary'),
            ],
            [
                'id' => 'policies_options',
                'label' => qt_lang('Policies'),
            ],
            [
                'id' => 'availability_options',
                'label' => qt_lang('Availability'),
                'translation' => false
            ],
        ],
        'fields' => [
            [
                'id' => 'post_title',
                'label' => qt_lang('Title'),
                'type' => 'text',
                'desc' => qt_lang('Enter a minimum of 6 characters'),
                'validation' => 'required:|min:6:m',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_slug',
                'label' => qt_lang('Permalink'),
                'type' => 'permalink',
                'post_type' => 'experience',
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_content',
                'label' => qt_lang('Detail'),
                'type' => 'editor',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_description',
                'label' => qt_lang('Description'),
                'type' => 'textarea',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'is_featured',
                'label' => qt_lang('is Featured?'),
                'type' => 'on_off',
                'permission' => ['administrator'],
                'section' => 'detail_options'
            ],
            [
                'id' => 'booking_form',
                'label' => qt_lang('Booking Form'),
                'type' => 'select',
                'choices' => [
                    'instant' => qt_lang('Instant'),
                    'enquiry' => qt_lang('Enquiry'),
                    'instant_enquiry' => qt_lang('Instant & Enquiry')
                ],
                'std' => 'instant',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'experience_type',
                'label' => qt_lang('Deal Type'),
                'type' => 'select',
                'choices' => 'terms:experience-type',
                'field_type' => 'taxonomy',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'style' => 'wide',
                'section' => 'detail_options'
            ],
            [
                'id' => 'experience_tour_type',
                'label' => qt_lang('Tour Type'),
                'type' => 'select',
                'choices' => 'terms:experience-tour-type',
                'field_type' => 'taxonomy',
                'layout' => 'col-12 col-md-6',
                'break' => false,
                'style' => 'wide',
                'section' => 'detail_options'
            ],
            [
                'id' => 'experience_residence_type',
                'label' => qt_lang('Residence'),
                'type' => 'select',
                'choices' => 'terms:experience-residence-type',
                'field_type' => 'taxonomy',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'style' => 'wide',
                'section' => 'detail_options'
            ],
            [
                'id' => 'durations',
                'label' => qt_lang('Durations'),
                'desc' => qt_lang('Example: 2 days 1 night, 3 hours'),
                'type' => 'text',
                'translation' => true,
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'number_of_guest_min',
                'label' => qt_lang('Min Pax.'),
                'type' => 'number',
                'desc' => qt_lang('Can change in Custom Price option.'),
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|regex:^[0-9]{1,}$:m',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'number_of_guest',
                'label' => qt_lang('Max People'),
                'type' => 'number',
                'desc' => qt_lang('-1: Unlimited. Can change in Custom Price option.'),
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|regex:^[0-9]{1,}$:m',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],

            [
                'id' => 'sold_out',
                'label' => qt_lang('Sold Out? i.e Check this option to mark this deal as currently sold out'),
                'type' => 'on_off',
                'std' => 'off',
                'permission' => ['administrator'],
                'section' => 'detail_options'
            ],
            [
                'id' => 'partnered_with_safaribookings',
                'label' => qt_lang('Partnered with safaribookings.com? i.e Is deal promoted on safaribookings.com?'),
                'type' => 'on_off',
                'std' => 'off',
                'permission' => ['administrator'],
                'section' => 'detail_options',
                'layout' => 'col-12 col-md-6',
            ],
            [
                'id' => 'safaribookings_link',
                'label' => qt_lang('safaribookings.com Link'),
                'desc' => 'https://www.safaribookings.com/tours/t15854',
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options',
                'condition' => 'partnered_with_safaribookings:is(on)'
            ],
            [
                'id' => 'partnered_with_traveladvisor',
                'label' => qt_lang('Partnered with traveladvisor.com? i.e Is deal promoted on traveladvisor.com?'),
                'type' => 'on_off',
                'std' => 'off',
                'permission' => ['administrator'],
                'section' => 'detail_options',

                'layout' => 'col-12 col-md-6',
            ],
            [
                'id' => 'tripadvisor_link',
                'label' => qt_lang('traveladvisor.com Link'),
                'desc' => 'https://www.traveladvisor.com/tours/t15854',
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options',
                'break' => true,
                'condition' => 'partnered_with_traveladvisor:is(on)'
            ],

            [
                'id' => 'location',
                'label' => qt_lang('Location Settings'),
                'type' => 'location',
                'field_type' => 'location',
                'section' => 'location_options',
                'translation' => true
            ],
            [
                'id' => 'booking_type',
                'label' => qt_lang('Booking Type'),
                'type' => 'select',
                'choices' => [
                    //'date_time' => qt_lang('Date & time'),
                    'just_date' => qt_lang('Per Night'),
                    'package' => qt_lang('Per Person'),
                    'external_link' => qt_lang('External Link'),
                ],
                'std' => 'package',
                'style' => 'wide',
                'layout' => 'col-12 col-md-4',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'is_per_night',
                'label' => qt_lang('Are packages for this deal per night? Use for getaways'),
                'type' => 'on_off',
                'std' => 'off',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'use_external_link',
                'label' => qt_lang('External Link'),
                'desc' => qt_lang('Set external link for home service'),
                'type' => 'text',
                'std' => '#',
                'layout' => 'col-12 col-md-6',
                'condition' => 'booking_type:is(external_link)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'text_external_link',
                'label' => qt_lang('Text External Link'),
                'type' => 'text',
                'std' => qt_lang('Check Out'),
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'condition' => 'booking_type:is(external_link)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'base_price',
                'label' => qt_lang('Base Price(Starting @)'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'condition' => 'booking_type:is(package)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'price_categories',
                'label' => qt_lang('Price Categories'),
                'type' => 'price_categories',
                'condition' => 'booking_type:not(package)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'tour_packages',
                'label' => qt_lang('List Packages'),
                'type' => 'list_item',
                'bind_from' => 'tour_packages_title__',
                'items' => [
                    [
                        'id' => 'title',
                        'label' => qt_lang('Title'),
                        'type' => 'text',
                        'translation' => true,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'unique_id',
                        'break' => true,
                        'translation' => false,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'price',
                        'label' => qt_lang('Price'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'sale_price',
                        'label' => qt_lang('Sale Price'),
                        'type' => 'text',
                        'break' => true,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'num_rooms',
                        'label' => qt_lang('No. of Rooms'),
                        'type' => 'number',
                        'min_length' => 0,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'room_title',
                        'label' => qt_lang('Room Type/Title'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'num_adult',
                        'label' => qt_lang('No. Adults'),
                        'type' => 'number',
                        'min_length' => 0,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'num_child',
                        'label' => qt_lang('No. Children'),
                        'type' => 'number',
                        'min_length' => 0,
                        'break' => true,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'num_infant',
                        'label' => qt_lang('No. Infants'),
                        'type' => 'number',
                        'min_length' => 0,
                        'break' => true,
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'has_meal_plan',
                        'label' => qt_lang('Package has meal plan? (For Getaways)'),
                        'type' => 'on_off',
                        'std' => 'off',
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'meal_plan',
                        'label' => qt_lang('Select meal plan'),
                        'type' => 'text',
                        'break' => true,
                        'std' => 'Bed & Breakfast',
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'detail',
                        'label' => qt_lang('Detail'),
                        'type' => 'textarea',
                        'break' => true,
                        'layout' => 'col-12 col-md-6',
                    ],
                ],
                'break' => true,
                'translation' => true,
                'condition' => 'booking_type:is(package)',
                'section' => 'pricing_options',
            ],
            [
                'id' => 'extra_services',
                'type' => 'list_item',
                'label' => qt_lang('Extra Services'),
                'bind_from' => 'extra_services_name___',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'translation' => true,
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'name_unique',
                        'label' => qt_lang('ID'),
                        'type' => 'unique',
                        'bind_from' => 'extra_services_name___',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'price',
                        'label' => qt_lang('Price'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'required',
                        'label' => qt_lang('Required'),
                        'type' => 'on_off',
                        'layout' => 'col-12 col-md-6',
                        'break' => true
                    ],
                ],
                'layout' => 'col-12',
                'break' => true,
                'section' => 'pricing_options',
                'translation' => true,
            ],
            [
                'id' => 'custom_price',
                'label' => qt_lang('Custom Availability'),
                'desc' => qt_lang('You can change availability to your PPS Package deals'),
                'type' => 'price',
                'post_type' => 'experience',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'gallery',
                'label' => qt_lang('Gallery'),
                'type' => 'media_advanced',
                'desc' => qt_lang('Choose at least 5 photos'),
                'post_type' => 'experience',
                'style' => [400, 500],
                'section' => 'gallery_options'
            ],
            [
                'id' => 'video',
                'label' => qt_lang('Video'),
                'desc' => qt_lang('Youtube, Vimeo, ...'),
                'type' => 'text',
                'section' => 'gallery_options'
            ],
            [
                'id' => 'languages',
                'label' => qt_lang('Languages'),
                'type' => 'checkbox',
                'choices' => 'terms:experience-languages',
                'field_type' => 'taxonomy',
                'style' => 'col',
                'section' => 'languages_options'
            ],
            [
                'id' => 'inclusions',
                'label' => qt_lang('Inclusions'),
                'type' => 'checkbox',
                'choices' => 'terms:experience-inclusions',
                'field_type' => 'taxonomy',
                'style' => 'col',
                'section' => 'inclusions_options'
            ],
            [
                'id' => 'exclusions',
                'label' => qt_lang('Exclusions'),
                'type' => 'checkbox',
                'choices' => 'terms:experience-exclusions',
                'field_type' => 'taxonomy',
                'style' => 'col',
                'section' => 'inclusions_options'
            ],
            [
                'id' => 'itinerary',
                'label' => qt_lang('Itinerary'),
                'type' => 'list_item',
                'bind_from' => 'itinerary_title___',
                'items' => [
                    [
                        'id' => 'sub_title',
                        'label' => qt_lang('Sub Title'),
                        'type' => 'text',
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'title',
                        'label' => qt_lang('Title'),
                        'type' => 'text',
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'description',
                        'label' => qt_lang('Description'),
                        'type' => 'textarea',
                        'translation' => true,
                    ],
                    [
                        'id' => 'image',
                        'label' => qt_lang('Photo'),
                        'type' => 'upload',
                        'translation' => false
                    ],
                    [
                        'id' => 'main_destination',
                        'label' => qt_lang('Main destination'),
                        'type' => 'text',
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'accommodation_title',
                        'label' => qt_lang('Accommodation Title'),
                        'type' => 'text',
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],

                    [
                        'id' => 'accommodation_description',
                        'label' => qt_lang('Accommodation Description'),
                        'type' => 'textarea',
                        'translation' => true,
                    ],
                    [
                        'id' => 'accommodation_gallery',
                        'label' => qt_lang('Accommodation Gallery'),
                        'type' => 'media_advanced',
                        'desc' => qt_lang('Choose at least 5 photos'),
                        'post_type' => 'accommodation',
                        'style' => [400, 500]
                    ],
                    [
                        'id' => 'meals_title',
                        'label' => qt_lang('Meals Title ex. Meals & Drinks'),
                        'type' => 'textarea',
                        'translation' => true,
                        'layout' => 'col-12 col-md-6'
                    ],

                    [
                        'id' => 'meals_description',
                        'label' => qt_lang('Description'),
                        'type' => 'textarea',
                        'translation' => true,
                    ]
                ],
                'layout' => 'col-12 col-lg-8',
                'break' => true,
                'section' => 'itinerary_options'
            ],
            [
                'id' => 'enable_cancellation',
                'label' => qt_lang('Enable Cancellation'),
                'type' => 'on_off',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancel_before',
                'label' => qt_lang('Cancel Before (days)'),
                'type' => 'number',
                'minlength' => 0,
                'validation' => 'regex:^[0-9]{1,}$:m',
                'std' => 0,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancellation_detail',
                'label' => qt_lang('Cancellation Detail'),
                'type' => 'textarea',
                'translation' => true,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'availability',
                'label' => qt_lang('Availability'),
                'desc' => qt_lang('Show reservation history on calendar'),
                'type' => 'availability',
                'post_type' => 'experience',
                'excluded' => true,
                'section' => 'availability_options'
            ],
            [
                'id' => 'import_ical_url',
                'label' => qt_lang('Ical Sync'),
                'type' => 'list_item',
                'bind_from' => 'import_ical_url_name___',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Chanel'),
                        'type' => 'select',
                        'choices' => [
                            'Google' => qt_lang('Google Calendar'),
                            'Airbnb' => qt_lang('Airbnb Calendar'),
                            'HomeAway' => qt_lang('HomeAway Calendar'),
                            'Other' => qt_lang('Other Calendar'),
                        ],
                        'translation' => 'no',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'ical_url',
                        'label' => qt_lang('Ical URL'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6'
                    ],
                ],
                'section' => 'availability_options'
            ],
            [
                'id' => 'ical_alert',
                'label' => qt_lang('Recommend'),
                'desc' => qt_lang('To use Ical Sync, you need to setup cron-job on your server.'),
                'type' => 'alert',
                'style' => 'info',
                'section' => 'availability_options'
            ],
            [
                'id' => 'export_ical_url',
                'label' => qt_lang('Export Ical'),
                'type' => 'ical',
                'post_type' => 'experience',
                'section' => 'availability_options'
            ],
        ]
    ],

    'car_settings' => [
        'sections' => [
            [
                'id' => 'detail_options',
                'label' => qt_lang('Details'),
            ],
            [
                'id' => 'location_options',
                'label' => qt_lang('Location'),
            ],
            [
                'id' => 'pricing_options',
                'label' => qt_lang('Pricing'),
                'translation' => false
            ],
            [
                'id' => 'extra_options',
                'label' => qt_lang('Amenities'),
            ],
            [
                'id' => 'gallery_options',
                'label' => qt_lang('Gallery'),
                'translation' => false
            ],
            [
                'id' => 'attribute_options',
                'label' => qt_lang('Features / Equipments'),
            ],
            [
                'id' => 'policies_options',
                'label' => qt_lang('Policies'),
            ],
            [
                'id' => 'availability_options',
                'label' => qt_lang('Availability'),
                'translation' => false
            ],
        ],
        'fields' => [
            [
                'id' => 'post_title',
                'label' => qt_lang('Title'),
                'type' => 'text',
                'desc' => qt_lang('Enter a minimum of 6 characters'),
                'validation' => 'required:|min:6:m',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_slug',
                'label' => qt_lang('Permalink'),
                'type' => 'permalink',
                'post_type' => 'car',
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_content',
                'label' => qt_lang('Detail'),
                'type' => 'editor',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_description',
                'label' => qt_lang('Description'),
                'type' => 'textarea',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'is_featured',
                'label' => qt_lang('is Featured?'),
                'type' => 'on_off',
                'permission' => ['administrator'],
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'car_type',
                'label' => qt_lang('Car Type'),
                'type' => 'select',
                'choices' => 'terms:car-type',
                'field_type' => 'taxonomy',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'style' => 'wide',
                'section' => 'detail_options'
            ],
            [
                'id' => 'booking_form',
                'label' => qt_lang('Booking Form'),
                'type' => 'select',
                'choices' => [
                    'instant' => qt_lang('Instant'),
                    'enquiry' => qt_lang('Enquiry'),
                    'instant_enquiry' => qt_lang('Instant & Enquiry')
                ],
                'std' => 'instant',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'quantity',
                'label' => qt_lang('Quantity'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'desc' => qt_lang('Leave empty for unlimited'),
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'location',
                'label' => qt_lang('Location Settings'),
                'type' => 'location',
                'field_type' => 'location',
                'section' => 'location_options',
                'translation' => true
            ],
            [
                'id' => 'enable_external',
                'label' => qt_lang('Enable External'),
                'type' => 'on_off',
                'std' => 'on',
                'break' => true,
                'layout' => 'col-12 col-md-6',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'use_external_link',
                'label' => qt_lang('External Link'),
                'desc' => qt_lang('Set external link for home service'),
                'type' => 'text',
                'std' => '#',
                'layout' => 'col-12 col-md-6',
                'condition' => 'enable_external:is(on)',
                'section' => 'pricing_options'
            ],

            [
                'id' => 'text_external_link',
                'label' => qt_lang('Text External Link'),
                'type' => 'text',
                'std' => qt_lang('Check Out'),
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'condition' => 'enable_external:is(on)',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'base_price',
                'label' => qt_lang('Base Price'),
                'type' => 'text',
                'validation' => 'required',
                'layout' => 'col-12 col-md-6',
                'std' => 0,
                'section' => 'pricing_options',
                'break' => true,
            ],
            [
                'id' => 'discount_by_day',
                'label' => qt_lang('Discount by number of day'),
                'type' => 'list_item',
                'bind_from' => 'discount_by_day_name___',
                'condition' => 'settings:car_booking_type:day',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'translation' => true,
                    ],
                    [
                        'id' => 'from',
                        'label' => qt_lang('From'),
                        'type' => 'text',
                    ],
                    [
                        'id' => 'to',
                        'label' => qt_lang('To'),
                        'type' => 'text',
                    ],
                    [
                        'id' => 'price',
                        'label' => qt_lang('Price'),
                        'type' => 'text',
                    ]
                ],
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options',
                'translation' => true
            ],
            [
                'id' => 'custom_price',
                'label' => qt_lang('Custom Price / Availability'),
                'desc' => qt_lang('You can change price, availability'),
                'type' => 'price',
                'post_type' => 'car',
                'section' => 'pricing_options'
            ],
            [
                'id' => 'passenger',
                'label' => qt_lang('Passenger'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|regex:^[0-9]{1,}$:m',
                'layout' => 'col-12 col-md-6',
                'section' => 'extra_options'
            ],
            [
                'id' => 'gear_shift',
                'label' => qt_lang('Gear Shift'),
                'type' => 'text',
                'translation' => true,
                'validation' => 'required',
                'layout' => 'col-12 col-md-6',
                'section' => 'extra_options'
            ],
            [
                'id' => 'baggage',
                'label' => qt_lang('Baggage'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 1,
                'validation' => 'required|regex:^[0-9]{1,}$:m',
                'layout' => 'col-12 col-md-6',
                'section' => 'extra_options'
            ],
            [
                'id' => 'door',
                'label' => qt_lang('Door'),
                'type' => 'number',
                'minlength' => 1,
                'std' => 4,
                'validation' => 'required|regex:^[0-9]{1,}$:m',
                'layout' => 'col-12 col-md-6',
                'section' => 'extra_options'
            ],
            [
                'id' => 'gallery',
                'label' => qt_lang('Gallery'),
                'type' => 'media_advanced',
                'post_type' => 'car',
                'style' => [450, 320],
                'section' => 'gallery_options',
            ],
            [
                'id' => 'video',
                'label' => qt_lang('Video'),
                'type' => 'text',
                'desc' => qt_lang('Youtube, Vimeo, ...'),
                'layout' => 'col-12',
                'section' => 'gallery_options',
            ],
            [
                'id' => 'insurance_plan',
                'label' => qt_lang('Insurance Plans'),
                'type' => 'list_item',
                'bind_from' => 'insurance_plan_name___',
                'layout' => 'col-12 col-md-6',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'translation' => true,
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'name_unique',
                        'label' => qt_lang('ID'),
                        'type' => 'unique',
                        'bind_from' => 'insurance_plan_name___',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'description',
                        'label' => qt_lang('Description'),
                        'type' => 'textarea',
                        'rows' => '3'
                    ],
                    [
                        'id' => 'price',
                        'label' => qt_lang('Price'),
                        'type' => 'text',
                    ],
                    [
                        'id' => 'fixed',
                        'label' => qt_lang('Fixed Price'),
                        'std' => 'off',
                        'type' => 'on_off',
                    ]
                ],
                'break' => true,
                'section' => 'attribute_options',
                'translation' => true
            ],
            [
                'id' => 'features',
                'label' => qt_lang('Car Features'),
                'type' => 'checkbox',
                'choices' => 'terms:car-feature',
                'field_type' => 'taxonomy',
                'style' => 'col',
                'section' => 'attribute_options'
            ],
            [
                'id' => 'equipments',
                'label' => qt_lang('Equipments'),
                'type' => 'term_price',
                'choices' => 'car-equipment',
                'field_type' => 'term_price',
                'style' => 'col',
                'section' => 'attribute_options'
            ],
            [
                'id' => 'enable_cancellation',
                'label' => qt_lang('Enable Cancellation'),
                'type' => 'on_off',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancel_before',
                'label' => qt_lang('Cancel Before (days)'),
                'type' => 'number',
                'minlength' => 0,
                'validation' => 'required|numeric',
                'std' => 0,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancellation_detail',
                'label' => qt_lang('Cancellation Detail'),
                'type' => 'textarea',
                'translation' => true,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'availability',
                'label' => qt_lang('Availability'),
                'desc' => qt_lang('Show reservation history on calendar'),
                'type' => 'availability',
                'excluded' => true,
                'post_type' => 'car',
                'section' => 'availability_options'
            ]
        ]
    ],
    'visa_settings' => [
        'sections' => [
            [
                'id' => 'detail_options',
                'label' => qt_lang('Details'),
            ],

            [
                'id' => 'pricing_options',
                'label' => qt_lang('Pricing'),
            ],
            [
                'id' => 'gallery_options',
                'label' => qt_lang('Gallery'),
            ],
            [
                'id' => 'policies_options',
                'label' => qt_lang('Policies'),
            ],
            [
                'id' => 'availability_options',
                'label' => qt_lang('Availability'),
                'translation' => false
            ],
        ],
        'fields' => [
            [
                'id' => 'post_title',
                'label' => qt_lang('Visa Name'),
                'type' => 'text',
                'desc' => qt_lang('Enter a minimum of 6 characters'),
                'validation' => 'required:|min:6:m',
                'translation' => true,
                'section' => 'detail_options'
            ],

            [
                'id' => 'booking_type',
                'label' => qt_lang('Booking Type'),
                'type' => 'select',
                'choices' => [
                    'just_date' => qt_lang('Just date')
                ],
                'std' => 'just_date',
                'style' => 'wide',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'section' => 'pricing_options'
            ],

            [
                'id' => 'post_slug',
                'label' => qt_lang('Permalink'),
                'type' => 'permalink',
                'post_type' => 'visa',
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_content',
                'label' => qt_lang('Visa Info/Detail'),
                'type' => 'editor',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'post_description',
                'label' => qt_lang('How to Book'),
                'type' => 'textarea',
                'translation' => true,
                'section' => 'detail_options'
            ],
            [
                'id' => 'is_featured',
                'label' => qt_lang('is Featured?'),
                'type' => 'on_off',
                'permission' => ['administrator'],//['administrator', 'partner', 'customer']
                'section' => 'detail_options'
            ],
            [
                'id' => 'booking_form',
                'label' => qt_lang('Booking Form'),
                'type' => 'select',
                'choices' => [
                    'instant' => qt_lang('Instant'),
                    'enquiry' => qt_lang('Enquiry'),
                    'instant_enquiry' => qt_lang('Instant & Enquiry')
                ],
                'std' => 'instant',
                'layout' => 'col-12 col-md-6',
                'section' => 'detail_options'
            ],
            [
                'id' => 'visa_type',
                'label' => qt_lang('Visa Type'),
                'type' => 'select',
                'choices' => 'terms:visa-type',
                'field_type' => 'taxonomy',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'style' => 'wide',
                'section' => 'detail_options'
            ],
            [
                'id' => 'base_price',
                'label' => qt_lang('Base Price'),
                'type' => 'text',
                'validation' => 'required',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'pricing_options'
            ],
            [
                'id' => 'require_emirates_referee',
                'label' => qt_lang('Require Emirates Referee No'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'pricing_options'
            ],

            [
                'id' => 'extra_services',
                'type' => 'list_item',
                'label' => qt_lang('Extra Services'),
                'bind_from' => 'extra_services_name___',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'translation' => true,
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'name_unique',
                        'label' => qt_lang('ID'),
                        'type' => 'unique',
                        'bind_from' => 'extra_services_name___',
                        'layout' => 'col-12 col-md-6'
                    ],
                    [
                        'id' => 'price',
                        'label' => qt_lang('Price'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                    ],
                    [
                        'id' => 'required',
                        'label' => qt_lang('Required'),
                        'type' => 'on_off',
                        'layout' => 'col-12 col-md-6',
                        'break' => true
                    ],
                ],
                'layout' => 'col-12',
                'break' => true,
                'section' => 'pricing_options',
                'translation' => true,
            ],
            [
                'id' => 'enable_cancellation',
                'label' => qt_lang('Enable Cancellation'),
                'type' => 'on_off',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancel_before',
                'label' => qt_lang('Cancel Before (days)'),
                'type' => 'number',
                'minlength' => 0,
                'validation' => 'regex:^[0-9]{1,}$:m',
                'std' => 0,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'cancellation_detail',
                'label' => qt_lang('Cancellation Detail'),
                'type' => 'textarea',
                'translation' => true,
                'condition' => 'enable_cancellation:is(on)',
                'section' => 'policies_options'
            ],
            [
                'id' => 'gallery',
                'label' => qt_lang('Gallery'),
                'type' => 'media_advanced',
                'desc' => qt_lang('Choose at least 5 photos'),
                'post_type' => 'visa',
                'style' => [650, 550],
                'section' => 'gallery_options'
            ],
            [
                'id' => 'availability',
                'label' => qt_lang('Availability'),
                'type' => 'availability',
                'excluded' => true,
                'post_type' => 'visa',
                'break' => true,
                'section' => 'availability_options'
            ],

        ]
    ],
    'page_settings' => [
        'content' => [
            'fields' => [
                [
                    'id' => 'post_title',
                    'label' => qt_lang('Title'),
                    'type' => 'text',
                    'translation' => true,
                    'desc' => qt_lang('The title is required field'),
                    'validation' => 'required'
                ],
                [
                    'id' => 'post_slug',
                    'label' => qt_lang('Permalink'),
                    'type' => 'permalink',
                    'post_type' => 'page'
                ],
                [
                    'id' => 'post_content',
                    'label' => qt_lang('Detail'),
                    'type' => 'editor',
                    'translation' => true,
                ]
            ]
        ],
        'sidebar' => [
            'fields' => [
                [
                    'id' => 'thumbnail_id',
                    'label' => qt_lang('Featured Image'),
                    'type' => 'upload',
                    'translation' => false
                ]
            ]
        ]
    ],
    'post_settings' => [
        'content' => [
            'fields' => [
                [
                    'id' => 'post_title',
                    'label' => qt_lang('Title'),
                    'type' => 'text',
                    'translation' => true,
                    'desc' => qt_lang('The title is required field'),
                    'validation' => 'required'
                ],
                [
                    'id' => 'post_slug',
                    'label' => qt_lang('Permalink'),
                    'type' => 'permalink',
                    'post_type' => 'post'
                ],
                [
                    'id' => 'post_content',
                    'label' => qt_lang('Detail'),
                    'type' => 'editor',
                    'translation' => true,
                ],
                [
                    'id' => 'author',
                    'label' => qt_lang('Author'),
                    'type' => 'select',
                    'choices' => 'user:administrator:0',
                    'layout' => 'col-12 col-lg-4'
                ]
            ]
        ],
        'sidebar' => [
            'fields' => [
                [
                    'id' => 'post_category',
                    'label' => qt_lang('Category'),
                    'type' => 'checkbox',
                    'choices' => 'terms:post-category'
                ],
                [
                    'id' => 'post_tag',
                    'label' => qt_lang('Tags'),
                    'type' => 'select2_multiple',
                    'choices' => 'terms:post-tag'
                ],
                [
                    'id' => 'thumbnail_id',
                    'label' => qt_lang('Featured Image'),
                    'type' => 'upload',
                    'translation' => false
                ]
            ]
        ]
    ],
    'seo_options' => [
        'google' => [
            [
                'id' => 'seo_title',
                'label' => qt_lang('SEO Title'),
                'type' => 'text',
                'std' => '{{title}}{{separator}}{{site-title}}',
                'translation' => true,
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-seo-title'
            ],
            [
                'id' => 'seo_description',
                'label' => qt_lang('Meta Description'),
                'type' => 'textarea',
                'std' => '{{description}}{{separator}}{{site-title}}',
                'translation' => true,
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-seo-description'
            ],
        ],
        'facebook' => [
            [
                'id' => 'facebook_image',
                'label' => qt_lang('Facebook Image'),
                'type' => 'upload',
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-facebook-thumbnail'
            ],
            [
                'id' => 'facebook_title',
                'label' => qt_lang('Facebook Title'),
                'type' => 'text',
                'std' => '{{title}}{{separator}}{{site-title}}',
                'translation' => true,
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-facebook-title'
            ],
            [
                'id' => 'facebook_description',
                'label' => qt_lang('Facebook Description'),
                'type' => 'textarea',
                'std' => '{{description}}{{separator}}{{site-title}}',
                'translation' => true,
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-facebook-description'
            ],
        ],
        'twitter' => [
            [
                'id' => 'twitter_image',
                'label' => qt_lang('Twitter Image'),
                'type' => 'upload',
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-twitter-thumbnail'
            ],
            [
                'id' => 'twitter_title',
                'label' => qt_lang('Twitter Title'),
                'type' => 'text',
                'std' => '{{title}}{{separator}}{{site-title}}',
                'translation' => true,
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-twitter-title'
            ],
            [
                'id' => 'twitter_description',
                'label' => qt_lang('Twitter Description'),
                'type' => 'textarea',
                'std' => '{{description}}{{separator}}{{site-title}}',
                'translation' => true,
                'seo_detect' => true,
                'seo_put_to' => 'data-seo-detect-twitter-description'
            ],
        ]
    ],
    'theme_options' => [
        'sections' => [
            [
                'id' => 'general_options',
                'label' => qt_lang('General'),
            ],
            [
                'id' => 'styling_options',
                'label' => qt_lang('Styling'),
                'translation' => false
            ],
            [
                'id' => 'page_options',
                'label' => qt_lang('Page'),
            ],
            [
                'id' => 'booking_options',
                'label' => qt_lang('Booking'),
            ],
            [
                'id' => 'service_options',
                'label' => qt_lang('Services')
            ],
            [
                'id' => 'payment_options',
                'label' => qt_lang('Payment Gateways'),
            ],
            [
                'id' => 'review_options',
                'label' => qt_lang('Reviews'),
                'translation' => false,
            ],
            [
                'id' => 'email_options',
                'label' => qt_lang('Email'),
            ],
            [
                'id' => 'partner_options',
                'label' => qt_lang('Partner'),
                'translation' => false,
            ],
            [
                'id' => 'registration',
                'label' => qt_lang('Registration'),
                'translation' => false
            ],
            [
                'id' => 'footer_options',
                'label' => qt_lang('Footer'),
            ],
            [
                'id' => 'ical_options',
                'label' => qt_lang('Ical Sync'),
            ],
            [
                'id' => 'advance_options',
                'label' => qt_lang('Advanced'),
            ],
            [
                'id' => 'affiliate_options',
                'label' => qt_lang('Affiliates'),
                'auto_hide' => true
            ],
        ],
        'fields' => [
            [
                'id' => 'site_name',
                'label' => qt_lang('Site Name'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'std' => 'AweBooking',
                'break' => true,
                'translation' => true,
                'section' => 'general_options'
            ],
            [
                'id' => 'site_description',
                'label' => qt_lang('Site Description'),
                'type' => 'text',
                'translation' => true,
                'layout' => 'col-12 col-md-6',
                'std' => 'Travel Booking System',
                'break' => true,
                'section' => 'general_options'
            ],
            [
                'id' => 'logo',
                'label' => qt_lang('Logo'),
                'type' => 'upload',
                'section' => 'general_options',
                'translation' => false
            ],
            [
                'id' => 'dashboard_logo',
                'label' => qt_lang('Dashboard Logo'),
                'type' => 'upload',
                'layout' => 'col-12 col-md-4',
                'section' => 'general_options',
                'translation' => false
            ],
            [
                'id' => 'dashboard_logo_short',
                'label' => qt_lang('Dashboard Small Logo'),
                'type' => 'upload',
                'layout' => 'col-12 col-md-4',
                'break' => true,
                'translation' => false,
                'section' => 'general_options'
            ],
            [
                'id' => 'favicon',
                'label' => qt_lang('Favicon'),
                'type' => 'upload',
                'section' => 'general_options',
                'translation' => false,
                'break' => true,
            ],
            [
                'id' => 'enable_sticky',
                'label' => qt_lang('Sticky Header'),
                'type' => 'on_off',
                'std' => 'off',
                'break' => true,
                'section' => 'styling_options'
            ],
            [
                'id' => 'main_color',
                'label' => qt_lang('Main Color'),
                'type' => 'colorpicker',
                'std' => '#f8546d',
                'layout' => 'col-12 col-sm-6 col-md-3',
                'break' => true,
                'section' => 'styling_options'
            ],
            [
                'id' => 'google_font',
                'label' => qt_lang("Google Font"),
                'type' => 'google_font',
                'style' => 'wide',
                'section' => 'styling_options'
            ],
            [
                'id' => 'custom_css',
                'label' => qt_lang('Custom CSS'),
                'type' => 'css',
                'section' => 'styling_options',
            ],
            [
                'id' => 'custom_header_code',
                'label' => qt_lang('Header Code'),
                'desc' => qt_lang('You can add some custom code: js, css. Note: Make sure your code is clean'),
                'type' => 'textarea',
                'section' => 'styling_options',
            ],
            [
                'id' => 'custom_footer_code',
                'label' => qt_lang('Footer Code'),
                'desc' => qt_lang('You can add some custom code: js, css. Note: Make sure your code is clean'),
                'type' => 'textarea',
                'section' => 'styling_options',
            ],
            [
                'id' => 'sort_search_form',
                'label' => qt_lang('Sort the search form'),
                'type' => 'list_item',
                'bind_from' => 'sort_search_form_label___',
                'items' => [
                    [
                        'id' => 'id',
                        'label' => qt_lang('Name'),
                        'type' => 'hidden',
                        'translation' => false
                    ],
                    [
                        'id' => 'only_search_form',
                        'label' => qt_lang('Only Search Form'),
                        'type' => 'hidden',
                        'translation' => false
                    ],
                    [
                        'id' => 'label',
                        'label' => qt_lang('Label'),
                        'type' => 'text',
                        'translation' => true
                    ]
                ],
                'std' => 'callback__convert_tab_service_to_list_item',
                'button_add_new_list_item' => false,
                'editable_list_item' => false,
                'compare_std_list_item' => true,
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'page_options',
                'translation' => true
            ],
            [
                'id' => 'home_slider',
                'label' => qt_lang('Home Slider'),
                'type' => 'uploads',
                'section' => 'page_options'
            ],
            [
                'id' => 'top_destination',
                'label' => qt_lang('Top Destination'),
                'type' => 'list_item',
                'bind_from' => 'top_destination_name___',
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Destination Name'),
                        'type' => 'text',
                        'translation' => true,
                    ],
                    [
                        'id' => 'lat',
                        'label' => qt_lang('Destination Lat'),
                        'type' => 'text',
                    ],
                    [
                        'id' => 'lng',
                        'label' => qt_lang('Destination Lng'),
                        'type' => 'text',
                    ],
                    [
                        'id' => 'image',
                        'label' => qt_lang('Image'),
                        'type' => 'upload',
                    ],
                    [
                        'id' => 'service',
                        'label' => qt_lang('Service'),
                        'type' => 'checkbox_pro',
                        'choices' => [
                            'home' => qt_lang('Home'),
                            'experience' => qt_lang('Experience'),
                            'car' => qt_lang('Car')
                        ],
                        'style' => 'col',
                    ]
                ],
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'page_options',
                'translation' => true
            ],
            [
                'id' => 'testimonial',
                'label' => qt_lang('Testimonial'),
                'type' => 'list_item',
                'bind_from' => 'testimonial_author_name___',
                'items' => [
                    [
                        'id' => 'author_name',
                        'label' => qt_lang('Author Name'),
                        'type' => 'text',
                        'translation' => true,
                    ],
                    [
                        'id' => 'author_avatar',
                        'label' => qt_lang('Avatar'),
                        'type' => 'upload',
                    ],
                    [
                        'id' => 'author_comment',
                        'label' => qt_lang('Comment'),
                        'type' => 'textarea',
                        'translation' => true
                    ],
                    [
                        'id' => 'author_rate',
                        'label' => qt_lang('Rate'),
                        'type' => 'range',
                        'minlength' => 1,
                        'maxlength' => [
                            'max-length' => 5
                        ],
                        'std' => 5
                    ],
                    [
                        'id' => 'date',
                        'label' => qt_lang('Created At'),
                        'type' => 'datepicker',
                        'min_date' => -1
                    ]
                ],
                'enqueue_scripts' => ['flatpickr-js', 'range-slider'],
                'enqueue_styles' => ['flatpickr-css', 'range-slider'],
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'page_options',
                'translation' => true
            ],
            [
                'id' => 'testimonial_background',
                'label' => qt_lang('Testimonial Background'),
                'type' => 'colorpicker',
                'std' => '#dd556a',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'section' => 'page_options',
            ],
            [
                'id' => 'term_condition_page',
                'label' => qt_lang('Term & Condition Page'),
                'type' => 'select',
                'choices' => 'page',
                'layout' => 'col-12 col-12 col-md-6',
                'style' => 'wide',
                'break' => true,
                'section' => 'page_options'
            ],
            [
                'id' => 'call_to_action_background',
                'label' => qt_lang('Call To Action Background'),
                'type' => 'upload',
                'section' => 'page_options',
                'translation' => false
            ],
            [
                'id' => 'call_to_action_page',
                'label' => qt_lang('Call To Action Page'),
                'type' => 'select',
                'choices' => 'page',
                'layout' => 'col-12 col-sm-6',
                'style' => 'wide',
                'break' => true,
                'section' => 'page_options'
            ],
            [
                'id' => 'blog_image',
                'label' => qt_lang('Blog page image'),
                'type' => 'upload',
                'section' => 'page_options',
                'translation' => false
            ],
            [
                'id' => 'sidebar_image',
                'label' => qt_lang('Sidebar image'),
                'type' => 'upload',
                'section' => 'page_options',
                'translation' => false
            ],
            [
                'id' => 'sidebar_image_link',
                'label' => qt_lang('Sidebar image link'),
                'type' => 'text',
                'section' => 'page_options',
                'layout' => 'col-12 col-md-6',
                'break' => true,
            ],
            [
                'id' => 'contact_detail',
                'label' => qt_lang('Contact Detail'),
                'type' => 'editor',
                'translation' => true,
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'page_options',
            ],
            [
                'id' => 'contact_map_lat',
                'label' => qt_lang('Contact Us: Map latitude'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'section' => 'page_options',
            ],
            [
                'id' => 'contact_map_lng',
                'label' => qt_lang('Contact Us: Map longtitude'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'section' => 'page_options',
            ],
            [
                'id' => 'currencies',
                'type' => 'list_item',
                'label' => qt_lang('Currencies'),
                'bind_from' => 'currencies_name___',
                'translation' => true,
                'items' => [
                    [
                        'id' => 'name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                        'translation' => true
                    ],
                    [
                        'id' => 'symbol',
                        'label' => qt_lang('Symbol'),
                        'type' => 'text',
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                    ],
                    [
                        'id' => 'unit',
                        'label' => qt_lang('Unit'),
                        'type' => 'select',
                        'choices' => default_currencies(),
                        'style' => 'wide',
                        'layout' => 'col-12 col-sm-4',
                    ],
                    [
                        'id' => 'exchange',
                        'label' => qt_lang('Exchange Rate'),
                        'type' => 'text',
                        'std' => 1,
                        'layout' => 'col-12 col-sm-4',
                    ],
                    [
                        'id' => 'position',
                        'label' => qt_lang('Position'),
                        'type' => 'select',
                        'choices' => [
                            'left' => qt_lang('Left ($99)'),
                            'right' => qt_lang('Right (99$)'),
                        ],
                        'style' => 'wide',
                        'std' => 'left',
                        'layout' => 'col-12 col-sm-4',
                        'break' => true,
                    ],
                    [
                        'id' => 'thousand_separator',
                        'label' => qt_lang('Thousand Separator'),
                        'type' => 'text',
                        'std' => ',',
                        'layout' => 'col-12 col-sm-4',
                    ],
                    [
                        'id' => 'decimal_separator',
                        'label' => qt_lang('Decimal Separator'),
                        'type' => 'text',
                        'std' => '.',
                        'layout' => 'col-12 col-sm-4',
                    ],
                    [
                        'id' => 'currency_decimal',
                        'label' => qt_lang('Currency Decimal'),
                        'type' => 'number',
                        'minlength' => 0,
                        'std' => 0,
                        'layout' => 'col-12 col-sm-4',
                    ],
                ],
                'std' => [
                    [
                        'name' => 'USD',
                        'symbol' => '$',
                        'unit' => 'USD',
                        'exchange' => 1,
                        'position' => 'left',
                        'thousand_separator' => ',',
                        'decimal_separator' => '.',
                        'currency_decimal' => 2
                    ]
                ],
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'booking_options'
            ],
            [
                'id' => 'primary_currency',
                'label' => qt_lang('Primary Currency'),
                'type' => 'select',
                'choices' => 'hh_currencies',
                'std' => 'USD',
                'layout' => 'col-12 col-md-6',
                'style' => 'wide',
                'break' => true,
                'section' => 'booking_options'
            ],
            [
                'id' => 'create_user_checkout',
                'label' => qt_lang('Automatically create an account'),
                'desc' => qt_lang('The system will create an account automatically if it is not registered on the system'),
                'type' => 'on_off',
                'std' => 'off',
                'break' => true,
                'section' => 'booking_options'
            ],
            [
                'id' => 'enable_email_confirmation',
                'label' => qt_lang('Enable Email Confirmation'),
                'desc' => qt_lang('The system will send an email to confirm the account before sending booking email information.'),
                'type' => 'on_off',
                'std' => 'on',
                'break' => true,
                'section' => 'booking_options'
            ],
            [
                'id' => 'service_tabs',
                'label' => qt_lang('Service Tabs'),
                'type' => 'tab',
                'tab_title' => [
                    [
                        'id' => 'home_tab',
                        'label' => qt_lang('Home'),
                    ],
                    [
                        'id' => 'experience_tab',
                        'label' => qt_lang('Experience'),
                    ],
                    [
                        'id' => 'car_tab',
                        'label' => qt_lang('Car'),
                    ],
                    [
                        'id' => 'visa_tab',
                        'label' => qt_lang('Visa'),
                    ],
                    [
                        'id' => 'flights_tab',
                        'label' => qt_lang('Flights'),
                    ],
                    [
                        'id' => 'hotels_tab',
                        'label' => qt_lang('Hotels'),
                    ],
                    [
                        'id' => 'excursions_tab',
                        'label' => qt_lang('Excursions'),
                    ],
                ],
                'tab_content' => [
                    [
                        'id' => 'enable_home',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'home_tab'
                    ],
                    [
                        'id' => 'home_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'home_tab',
                        'translation' => false,
                        'condition' => 'enable_home:is(on)',
                    ],
                    [
                        'id' => 'home_search_radius',
                        'label' => qt_lang('Search Radius'),
                        'desc' => qt_lang('Search radius to find home by lat/lng'),
                        'type' => 'range',
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'section' => 'home_tab',
                        'condition' => 'enable_home:is(on)',
                        'minlength' => 1,
                        'maxlength' => [
                            'max-length' => 500
                        ],
                        'std' => 25,
                    ],
                    [
                        'id' => 'home_top_destination',
                        'label' => qt_lang('Top Destination'),
                        'type' => 'list_item',
                        'bind_from' => 'home_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Destination Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'lat',
                                'label' => qt_lang('Destination Lat'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'lng',
                                'label' => qt_lang('Destination Lng'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ],
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'condition' => 'enable_home:is(on)',
                        'section' => 'home_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'home_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'home_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'home_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'home_tab'
                    ],
                    [
                        'id' => 'included_home_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'home_tab'
                    ],
                    [
                        'id' => 'home_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'home_tab',
                    ],
                    [
                        'id' => 'enable_experience',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'experience_tab'
                    ],
                    [
                        'id' => 'experience_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'experience_tab',
                        'translation' => false,
                        'condition' => 'enable_experience:is(on)',
                    ],
                    [
                        'id' => 'experience_search_radius',
                        'label' => qt_lang('Search Radius'),
                        'desc' => qt_lang('Search radius to find experience by lat/lng'),
                        'type' => 'range',
                        'layout' => 'col-12 col-md-6',
                        'condition' => 'enable_experience:is(on)',
                        'break' => true,
                        'section' => 'experience_tab',
                        'std' => 25,
                        'minlength' => 1,
                        'maxlength' => [
                            'max-length' => 500
                        ]
                    ],
                    [
                        'id' => 'experience_top_destination',
                        'label' => qt_lang('Top Destination'),
                        'type' => 'list_item',
                        'bind_from' => 'experience_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Destination Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'lat',
                                'label' => qt_lang('Destination Lat'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'lng',
                                'label' => qt_lang('Destination Lng'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ],
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'section' => 'experience_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'experience_partners',
                        'label' => qt_lang('Our Partners'),
                        'type' => 'list_item',
                        'bind_from' => 'experience_partners_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Partner Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'link',
                                'label' => qt_lang('Partner Link'),
                                'type' => 'text',
                                'std' => 'https://safaribookings.com/operator/tarenaline',
                                'break' => true,
                            ],

                            [
                                'id' => 'logo',
                                'label' => qt_lang('Partner Logo'),
                                'type' => 'upload',
                                'translation' => false,
                            ],
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'section' => 'experience_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'experience_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'experience_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'experience_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'experience_tab'
                    ],
                    [
                        'id' => 'included_experience_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'experience_tab'
                    ],
                    [
                        'id' => 'experience_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'experience_tab',
                    ],
                    [
                        'id' => 'enable_car',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'car_tab'
                    ],
                    [
                        'id' => 'car_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'car_tab',
                        'translation' => false,
                        'condition' => 'enable_car:is(on)',
                    ],
                    [
                        'id' => 'car_booking_type',
                        'label' => qt_lang('Booking Type'),
                        'type' => 'select',
                        'choices' => [
                            'day' => qt_lang('By Day'),
                            'hour' => qt_lang('By Hour'),
                            'one_time' => qt_lang('One Time'),
                        ],
                        'std' => 'day',
                        'layout' => 'col-6 col-md-3',
                        'break' => true,
                        'section' => 'car_tab'
                    ],
                    [
                        'id' => 'car_search_radius',
                        'label' => qt_lang('Search Radius'),
                        'desc' => qt_lang('Search radius to find car by lat/lng'),
                        'type' => 'range',
                        'layout' => 'col-12 col-md-6',
                        'condition' => 'enable_car:is(on)',
                        'break' => true,
                        'section' => 'car_tab',
                        'minlength' => 1,
                        'std' => 25,
                        'maxlength' => [
                            'max-length' => 500
                        ]
                    ],
                    [
                        'id' => 'car_top_destination',
                        'label' => qt_lang('Top Destination'),
                        'type' => 'list_item',
                        'condition' => 'enable_car:is(on)',
                        'bind_from' => 'car_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Destination Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'lat',
                                'label' => qt_lang('Destination Lat'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'lng',
                                'label' => qt_lang('Destination Lng'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ]
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'section' => 'car_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'car_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'car_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'car_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'car_tab'
                    ],
                    [
                        'id' => 'included_car_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'car_tab'
                    ],
                    [
                        'id' => 'car_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'car_tab',
                    ],

                    [
                        'id' => 'enable_visa',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'visa_tab'
                    ],
                    [
                        'id' => 'visa_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'visa_tab',
                        'translation' => false,
                        'condition' => 'enable_visa:is(on)',
                    ],
                    [
                        'id' => 'visa_booking_type',
                        'label' => qt_lang('Booking Type'),
                        'type' => 'select',
                        'choices' => [
                            'just_date' => qt_lang('One Time')
                        ],
                        'std' => 'just_date',
                        'layout' => 'col-6 col-md-3',
                        'break' => true,
                        'section' => 'visa_tab'
                    ],
                    [
                        'id' => 'visa_top_destination',
                        'label' => qt_lang('Top Destination'),
                        'type' => 'list_item',
                        'condition' => 'enable_visa:is(on)',
                        'bind_from' => 'visa_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Destination Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'lat',
                                'label' => qt_lang('Destination Lat'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'lng',
                                'label' => qt_lang('Destination Lng'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ]
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'section' => 'visa_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'visa_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'visa_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'visa_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'visa_tab'
                    ],
                    [
                        'id' => 'included_car_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'visa_tab'
                    ],
                    [
                        'id' => 'visa_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'visa_tab',
                    ],

                    [
                        'id' => 'enable_flights',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'flights_tab'
                    ],
                    [
                        'id' => 'flights_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'flights_tab',
                        'translation' => false,
                        'condition' => 'enable_flights:is(on)',
                    ],
                    [
                        'id' => 'flights_booking_type',
                        'label' => qt_lang('Booking Type'),
                        'type' => 'select',
                        'choices' => [
                            'one_way' => qt_lang('One Way'),
                            'return' => qt_lang('Return')
                        ],
                        'std' => 'just_date',
                        'layout' => 'col-6 col-md-3',
                        'break' => true,
                        'section' => 'flights_tab'
                    ],
                    [
                        'id' => 'flights_top_destination',
                        'label' => qt_lang('Top Destinations'),
                        'type' => 'list_item',
                        'condition' => 'enable_flights:is(on)',
                        'bind_from' => 'flights_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'from',
                                'label' => qt_lang('Flying from'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'to',
                                'label' => qt_lang('Flying to'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'flying_from_code',
                                'label' => qt_lang('Departure Airport IATA Code'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'flying_to_code',
                                'label' => qt_lang('Destination Airport IATA Code'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'from_amount',
                                'label' => qt_lang('From (Amount)'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ]
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'section' => 'flights_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'flights_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'flights_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'flights_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'flights_tab'
                    ],
                    [
                        'id' => 'included_flights_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'flights_tab'
                    ],
                    [
                        'id' => 'flights_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'flights_tab',
                    ],
                    [
                        'id' => 'flights_api_key',
                        'label' => qt_lang('Flights API Key (https://tequila.kiwi.com/portal/login)'),
                        'type' => 'text',
                        'std' => '',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'flights_tab',
                    ],

                    [
                        'id' => 'flights_markup_percentage',
                        'label' => qt_lang('Flights Markup Price % (Test)'),
                        'type' => 'text',
                        'std' => '',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'flights_tab',
                    ],

                    [
                        'id' => 'enable_hotels',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'hotels_tab'
                    ],
                    [
                        'id' => 'hotels_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'hotels_tab',
                        'translation' => false,
                        'condition' => 'enable_hotels:is(on)',
                    ],
                    [
                        'id' => 'hotels_booking_type',
                        'label' => qt_lang('Booking Type'),
                        'type' => 'select',
                        'choices' => [
                            'per_night' => qt_lang('Per Night')
                        ],
                        'std' => 'per_night',
                        'layout' => 'col-6 col-md-3',
                        'break' => true,
                        'section' => 'hotels_tab'
                    ],
                    [
                        'id' => 'hotels_top_destination',
                        'label' => qt_lang('Top Destination'),
                        'type' => 'list_item',
                        'bind_from' => 'hotels_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Destination Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'lat',
                                'label' => qt_lang('Destination Lat'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'lng',
                                'label' => qt_lang('Destination Lng'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ],
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'condition' => 'enable_hotels:is(on)',
                        'section' => 'hotels_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'hotels_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'hotels_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'hotels_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'hotels_tab'
                    ],
                    [
                        'id' => 'included_hotels_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'hotels_tab'
                    ],
                    [
                        'id' => 'hotels_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'hotels_tab',
                    ],
                    [
                        'id' => 'hotels_api_key',
                        'label' => qt_lang('Hotels API Key (https://rezlive.com)'),
                        'type' => 'text',
                        'std' => '',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'hotels_tab',
                    ],

                    [
                        'id' => 'enable_excursions',
                        'label' => qt_lang('Service Enable'),
                        'type' => 'on_off',
                        'std' => 'on',
                        'section' => 'excursions_tab'
                    ],
                    [
                        'id' => 'excursions_featured_image',
                        'label' => qt_lang('Featured Image'),
                        'type' => 'upload',
                        'section' => 'excursions_tab',
                        'translation' => false,
                        'condition' => 'enable_excursions:is(on)',
                    ],
                    [
                        'id' => 'excursions_booking_type',
                        'label' => qt_lang('Booking Type'),
                        'type' => 'select',
                        'choices' => [
                            'just_date' => qt_lang('Just Date')
                        ],
                        'std' => 'just_date',
                        'layout' => 'col-6 col-md-3',
                        'break' => true,
                        'section' => 'excursions_tab'
                    ],
                    [
                        'id' => 'excursions_top_destination',
                        'label' => qt_lang('Top Destinations'),
                        'type' => 'list_item',
                        'bind_from' => 'excursions_top_destination_name___',
                        'items' => [
                            [
                                'id' => 'name',
                                'label' => qt_lang('Destination Name'),
                                'type' => 'text',
                                'translation' => true,
                            ],
                            [
                                'id' => 'lat',
                                'label' => qt_lang('Destination Lat'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'lng',
                                'label' => qt_lang('Destination Lng'),
                                'type' => 'text',
                            ],
                            [
                                'id' => 'image',
                                'label' => qt_lang('Image'),
                                'type' => 'upload',
                            ],
                        ],
                        'layout' => 'col-12 col-md-6',
                        'break' => true,
                        'condition' => 'enable_excursions:is(on)',
                        'section' => 'excursions_tab',
                        'translation' => true,
                    ],
                    [
                        'id' => 'excursions_call_to_action_background',
                        'label' => qt_lang('Call To Action Background'),
                        'type' => 'upload',
                        'section' => 'excursions_tab',
                        'translation' => false
                    ],
                    [
                        'id' => 'excursions_call_to_action_page',
                        'label' => qt_lang('Call To Action Page'),
                        'type' => 'select',
                        'choices' => 'page',
                        'layout' => 'col-12 col-sm-6',
                        'style' => 'wide',
                        'break' => true,
                        'section' => 'excursions_tab'
                    ],
                    [
                        'id' => 'included_excursions_tax',
                        'label' => qt_lang('Tax is included?'),
                        'desc' => qt_lang('Tax is included in the price of the product'),
                        'type' => 'on_off',
                        'section' => 'excursions_tab'
                    ],
                    [
                        'id' => 'excursions_tax',
                        'label' => qt_lang('Tax (%)'),
                        'type' => 'text',
                        'std' => '10',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'excursions_tab',
                    ],
                    [
                        'id' => 'excursions_api_key',
                        'label' => qt_lang('Hotels API Key (https://patner.viator.com)'),
                        'type' => 'text',
                        'std' => '',
                        'layout' => 'col-12 col-md-6',
                        'section' => 'excursions_tab',
                    ],
                ],
                'section' => 'service_options'
            ],
            [
                'id' => 'payment_tabs',
                'label' => qt_lang('Payment Tabs'),
                'type' => 'payment',
                'layout' => 'col-12',
                'section' => 'payment_options'
            ],
            [
                'id' => 'enable_review',
                'label' => qt_lang('Enable Review'),
                'type' => 'on_off',
                'section' => 'review_options',
                'std' => 'on'
            ],
            [
                'id' => 'review_approval',
                'label' => qt_lang('Review approval'),
                'desc' => qt_lang('Reviews are moderated by the admin before being published'),
                'type' => 'on_off',
                'section' => 'review_options',
                'std' => 'on',
                'condition' => 'enable_review:is(on)'
            ],
            [
                'id' => 'review_after_booking',
                'label' => qt_lang('Review after booking'),
                'desc' => qt_lang('Customers are only allowed to write a review after booking'),
                'type' => 'on_off',
                'section' => 'review_options',
                'std' => 'off',
                'condition' => 'enable_review:is(on)'
            ],
            [
                'id' => 'smtp_host',
                'label' => qt_lang('SMTP Host'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'type_encrytion',
                'label' => qt_lang('Type of Encryption'),
                'type' => 'radio',
                'choices' => [
                    'none' => 'None',
                    'ssl' => 'SSL',
                    'tls' => 'TLS'
                ],
                'std' => 'ssl',
                'section' => 'email_options'
            ],
            [
                'id' => 'smtp_port',
                'label' => qt_lang('SMTP Port'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'smtp_username',
                'label' => qt_lang('SMTP Username'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'smtp_password',
                'label' => qt_lang('SMTP Password'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'email_alert',
                'label' => qt_lang('Tips'),
                'desc' => qt_lang('You can send a test email to check the configuration. Go to Tools -> Advanced -> Email Checker'),
                'type' => 'alert',
                'style' => 'info',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'send_enquire_email',
                'label' => qt_lang('Send Enquire Email'),
                'type' => 'radio',
                'choices' => [
                    'admin_customer' => qt_lang('Admin & Customer'),
                    'partner_customer' => qt_lang('Partner & Customer'),
                    'admin_partner_customer' => qt_lang('Admin, Partner & Customer')
                ],
                'std' => 'admin_partner_customer',
                'section' => 'email_options'
            ],
            [
                'id' => 'email_from_address',
                'label' => qt_lang('Email From Address'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'email_from',
                'label' => qt_lang('Email From Name'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'section' => 'email_options'
            ],
            [
                'id' => 'email_logo',
                'label' => qt_lang('Email Logo'),
                'type' => 'upload',
                'layout' => 'col-12 col-md-6',
                'section' => 'email_options'
            ],
            [
                'id' => 'enable_partner_registration',
                'label' => qt_lang('Partner Registration'),
                'type' => 'on_off',
                'std' => 'on',
                'section' => 'partner_options'
            ],
            [
                'id' => 'partner_commission',
                'label' => qt_lang('Commission (%)'),
                'type' => 'text',
                'std' => 10,
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'partner_options'
            ],
            [
                'id' => 'alert_payout',
                'label' => qt_lang('Note:'),
                'desc' => qt_lang("To use <strong>Payout</strong> feature. You have to setup cron-job on your hosting. <br/>Read this document to setup: <a class='ml-1' href='https://docs.awebooking.org/faqs/how-to-setup-cron-job-for-payout' target='_blank'>Read more</a>"),
                'type' => 'alert',
                'style' => 'warning',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'partner_options'
            ],
            [
                'id' => 'payout_date',
                'label' => qt_lang('Payout Date'),
                'desc' => qt_lang('The system will automatically payout on this date'),
                'type' => 'select',
                'choices' => 'number_range:1_31',
                'std' => date('d'),
                'style' => 'wide',
                'layout' => 'col-12 col-md-3',
                'translation' => false,
                'section' => 'partner_options'
            ],
            [
                'id' => 'payout_time',
                'label' => qt_lang('Payout Time'),
                'desc' => qt_lang('The system will automatically payout on this time'),
                'type' => 'timepicker',
                'std' => '15:00',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'translation' => false,
                'section' => 'partner_options'
            ],
            [
                'id' => 'min_balance',
                'label' => qt_lang('Minimum Balance'),
                'desc' => qt_lang('Minimum balance for the system to process payout'),
                'type' => 'text',
                'std' => 100,
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'partner_options'
            ],
            [
                'id' => 'account_approval',
                'label' => qt_lang('Account Approval'),
                'desc' => qt_lang('Admin reviews the account before publishing '),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'registration'
            ],
            [
                'id' => 'facebook_login',
                'label' => qt_lang('Facebook Login'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'registration'
            ],
            [
                'id' => 'facebook_api',
                'label' => qt_lang('Facebook API'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'condition' => 'facebook_login:is(on)',
                'section' => 'registration'
            ],
            [
                'id' => 'facebook_secret',
                'label' => qt_lang('Facebook Secret'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'condition' => 'facebook_login:is(on)',
                'section' => 'registration'
            ],
            [
                'id' => 'google_login',
                'label' => qt_lang('Google Login'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'registration'
            ],
            [
                'id' => 'google_client_id',
                'label' => qt_lang('Google Client ID'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'condition' => 'google_login:is(on)',
                'section' => 'registration'
            ],
            [
                'id' => 'google_client_secret',
                'label' => qt_lang('Google Client Secret'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'condition' => 'google_login:is(on)',
                'section' => 'registration'
            ],
            [
                'id' => 'become_a_host_background',
                'label' => qt_lang('Become-a-host Background'),
                'type' => 'upload',
                'section' => 'page_options'
            ],
            [
                'id' => 'become_a_host_background_footer',
                'label' => qt_lang('Become-a-host Footer Background'),
                'type' => 'upload',
                'section' => 'page_options'
            ],
            [
                'id' => 'become_a_host_features',
                'label' => qt_lang('Become-a-host Features'),
                'type' => 'list_item',
                'bind_from' => 'become_a_host_features_title__',
                'items' => [
                    [
                        'id' => 'title',
                        'label' => qt_lang('Title'),
                        'type' => 'text',
                        'translation' => true,
                    ],
                    [
                        'id' => 'detail',
                        'label' => qt_lang('Detail'),
                        'type' => 'textarea',
                        'translation' => true,
                    ],
                    [
                        'id' => 'image',
                        'label' => qt_lang('Image'),
                        'type' => 'upload',
                    ]
                ],
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'section' => 'page_options'
            ],
            [
                'id' => 'coming_soon_date',
                'label' => qt_lang('Coming Soon Date'),
                'type' => 'datepicker',
                'layout' => 'col-12 col-md-3',
                'section' => 'page_options'
            ],
            [
                'id' => 'coming_soon_background',
                'label' => qt_lang('Coming Soon Background'),
                'type' => 'upload',
                'section' => 'page_options'
            ],
            //Footer
            [
                'id' => 'footer_logo',
                'label' => qt_lang('Logo Footer'),
                'type' => 'upload',
                'section' => 'footer_options'
            ],
            [
                'id' => 'list_social',
                'label' => qt_lang('List Social'),
                'type' => 'list_item',
                'bind_from' => 'list_social_social_name___',
                'translation' => true,
                'items' => [
                    [
                        'id' => 'social_name',
                        'label' => qt_lang('Name'),
                        'type' => 'text',
                        'translation' => true,
                    ],
                    [
                        'id' => 'social_icon',
                        'label' => qt_lang('Icon'),
                        'type' => 'icon',
                    ],
                    [
                        'id' => 'social_link',
                        'label' => qt_lang('Link'),
                        'type' => 'text',
                    ]
                ],
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'footer_options'
            ],
            [
                'id' => 'footer_menu1_label',
                'label' => qt_lang('First menu label'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'break' => false,
                'translation' => true,
                'section' => 'footer_options'
            ],
            [
                'id' => 'footer_menu1',
                'label' => qt_lang('First menu'),
                'type' => 'select',
                'style' => 'wide',
                'choices' => 'nav',
                'section' => 'footer_options',
                'break' => true,
                'layout' => 'col-12 col-md-3',
            ],
            [
                'id' => 'footer_menu2_label',
                'label' => qt_lang('Second menu label'),
                'type' => 'text',
                'layout' => 'col-12 col-md-3',
                'break' => false,
                'translation' => true,
                'section' => 'footer_options'
            ],
            [
                'id' => 'footer_menu2',
                'label' => qt_lang('Second menu'),
                'type' => 'select',
                'style' => 'wide',
                'choices' => 'nav',
                'section' => 'footer_options',
                'break' => true,
                'layout' => 'col-12 col-md-3',
            ],
            [
                'id' => 'footer_subscribe_label',
                'label' => qt_lang('Subscribe label'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'section' => 'footer_options'
            ],
            [
                'id' => 'footer_subscribe_description',
                'label' => qt_lang('Subscribe description'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'section' => 'footer_options'
            ],
            [
                'id' => 'copy_right',
                'label' => qt_lang('Copy right text'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'translation' => true,
                'section' => 'footer_options'
            ],
            //End footer
            [
                'id' => 'ical_heading',
                'label' => qt_lang('Automatically sync every'),
                'desc' => qt_lang('Example: Automatically sync every 1 hour 30 minutes'),
                'type' => 'heading',
                'section' => 'ical_options'
            ],
            [
                'id' => 'ical_time_type',
                'label' => qt_lang('Type'),
                'type' => 'select',
                'choices' => [
                    'hour' => qt_lang('Hour'),
                    'minute' => qt_lang('Minute'),
                ],
                'std' => 'hour',
                'layout' => 'col-6 col-md-3',
                'section' => 'ical_options'
            ],
            [
                'id' => 'ical_hour',
                'label' => qt_lang('Hour'),
                'type' => 'select',
                'choices' => 'number_range:1_12',
                'layout' => 'col-6 col-md-3',
                'std' => 1,
                'section' => 'ical_options',
                'condition' => 'ical_time_type:is(hour)'
            ],
            [
                'id' => 'ical_minute',
                'label' => qt_lang('Minutes'),
                'type' => 'select',
                'choices' => 'number_range:1_30',
                'layout' => 'col-6 col-md-3',
                'std' => 30,
                'break' => true,
                'section' => 'ical_options',
                'condition' => 'ical_time_type:is(minute)'
            ],
            [
                'id' => 'ical_alert',
                'type' => 'alert',
                'label' => qt_lang('Warning'),
                'style' => 'warning',
                'desc' => qt_lang('This feature needs to be installed on Cron-job on your server.<br/>Read more: <a target="_blank" href="https://docs.awebooking.org/faqs/how-to-setup-cron-job-for-ical-sync">How to setup Cron-job for Ical Sync</a>'),
                'section' => 'ical_options'
            ],
            [
                'id' => 'site_language',
                'label' => qt_lang('Site Language'),
                'type' => 'select',
                'choices' => 'language',
                'layout' => 'col-12 col-12 col-md-6',
                'style' => 'wide',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'right_to_left',
                'label' => qt_lang('Right to Left'),
                'type' => 'on_off',
                'std' => 'off',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'multi_language',
                'label' => qt_lang('Enable multi language'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'advance_options',
            ],
            [
                'id' => 'optimize_site',
                'label' => qt_lang('Optimize Site'),
                'desc' => qt_lang('This feature allows you to compress html, cache queries'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'advance_options',
            ],
            [
                'id' => 'enable_lazyload',
                'label' => qt_lang('Enable Lazy Load'),
                'desc' => qt_lang('Elements will be loaded when scroll'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'advance_options',
            ],
            [
                'id' => 'unit_of_measure',
                'label' => qt_lang('Unit Of Measure'),
                'type' => 'select',
                'choices' => [
                    'm2' => 'm2',
                    'ft2' => 'ft2'
                ],
                'std' => 'm2',
                'layout' => 'col-12 col-md-6',
                'style' => 'wide',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'mailchimp_api_key',
                'label' => qt_lang('MailChimp API Key'),
                'desc' => qt_lang('This key to connect to MailChimp.'),
                'type' => 'text',
                'layout' => 'col-6 col-md-3',
                'section' => 'advance_options'
            ],
            [
                'id' => 'mailchimp_list',
                'label' => qt_lang('MailChimp List ID'),
                'desc' => qt_lang('The ID of the list you want to add the user to'),
                'type' => 'text',
                'layout' => 'col-6 col-md-3',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'mapbox_key',
                'label' => qt_lang('Mapbox Key'),
                'desc' => qt_lang('Use this key to enable Mapbox map'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'google_font_key',
                'label' => qt_lang('Google Font Key'),
                'desc' => qt_lang('Use this key to get Google Fonts'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'use_google_captcha',
                'label' => qt_lang('Use Google Captcha?'),
                'desc' => qt_lang('Use Google Captcha for checkout form, review form, contact us form, ...'),
                'type' => 'on_off',
                'section' => 'advance_options',
            ],
            [
                'id' => 'google_captcha_site_key',
                'label' => qt_lang('Google Captcha Key'),
                'type' => 'text',
                'condition' => 'use_google_captcha:is(on)',
                'layout' => 'col-6 col-md-3',
                'section' => 'advance_options'
            ],
            [
                'id' => 'google_captcha_secret_key',
                'label' => qt_lang('Google Captcha Secret'),
                'type' => 'text',
                'condition' => 'use_google_captcha:is(on)',
                'layout' => 'col-6 col-md-3',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'enable_gdpr',
                'label' => qt_lang('Enable GDPR Cookie'),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'advance_options'
            ],
            [
                'id' => 'gdpr_page',
                'label' => qt_lang('GDPR Statement Page'),
                'type' => 'select',
                'choices' => 'page',
                'layout' => 'col-12 col-md-3',
                'break' => true,
                'condition' => 'enable_gdpr:is(on)',
                'section' => 'advance_options'
            ],
            [
                'id' => 'user_admin',
                'label' => qt_lang('Admin User'),
                'desc' => qt_lang('Choose an account to set as Administrator'),
                'type' => 'select',
                'style' => 'wide',
                'choices' => 'user:administrator',
                'section' => 'advance_options',
                'break' => true,
                'layout' => 'col-12 col-md-6',
            ],
            [
                'id' => 'featured_text',
                'label' => qt_lang('Featured Label'),
                'desc' => qt_lang('Setup featured label for home featured item'),
                'type' => 'text',
                'layout' => 'col-12 col-md-6',
                'std' => 'Featured',
                'translation' => true,
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'use_ssl',
                'label' => qt_lang('Enable SSL'),
                'desc' => qt_lang('The page needs to reload to be applied'),
                'type' => 'on_off',
                'section' => 'advance_options'
            ],
            [
                'id' => 'enable_seo',
                'label' => qt_lang('Enable SEO Tools'),
                'desc' => qt_lang('Customize content for search engines '),
                'type' => 'on_off',
                'std' => 'off',
                'section' => 'advance_options'
            ],
            [
                'id' => 'timezone',
                'label' => qt_lang('Time Zone'),
                'type' => 'select2',
                'choices' => get_time_zone(),
                'choice_group' => true,
                'std' => 'Europe/London',
                'layout' => 'col-12 col-md-6',
                'break' => true,
                'section' => 'advance_options'
            ],
            [
                'id' => 'time_format',
                'label' => qt_lang('Time Format'),
                'desc' => qt_lang('Change time format'),
                'type' => 'text',
                'std' => 'h:i A',
                'choice_group' => true,
                'layout' => 'col-12 col-md-6',
                'section' => 'advance_options'
            ],
            [
                'id' => 'date_format',
                'label' => qt_lang('Date Format'),
                'desc' => qt_lang('Change date format'),
                'type' => 'text',
                'std' => 'm-d-Y',
                'choice_group' => true,
                'break' => true,
                'layout' => 'col-12 col-md-6',
                'section' => 'advance_options'
            ],
            [
                'id' => 'affiliates_tabs',
                'label' => qt_lang('Affiliates Tabs'),
                'type' => 'tab',
                'tab_title' => [

                ],
                'tab_content' => [

                ],
                'section' => 'affiliate_options'
            ]
        ]
    ],
];*/
