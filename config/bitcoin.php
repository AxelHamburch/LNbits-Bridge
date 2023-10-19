<?php

return [
    'lnbits' => [
        'url' => env('LNBITS_URL'),
        'admin_api_key' => env('LNBITS_ADMIN_API_KEY'),
        'invoice_read_keys' => env('LNBITS_INVOICE_READ_API_KEY'),
    ],
    'btcpayserver' => [
        'url' => env('ADMIN_BTCPAYSERVER_URL'),
        'admin_api_key' => env('ADMIN_BTCPAYSERVER_API_KEY'),
    ]
];
