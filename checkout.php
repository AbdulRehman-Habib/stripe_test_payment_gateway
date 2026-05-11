<?php

require('config.php');

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],

    'line_items' => [[
        'price_data' => [
            'currency' => 'pkr',
            'product_data' => [
                'name' => 'Test Product',
            ],
            'unit_amount' => 30000, // 300 PKR (FIXED)
        ],
        'quantity' => 1,
    ]],

    'mode' => 'payment',

    'success_url' => 'http://localhost/stripe/success.php',
    'cancel_url' => 'http://localhost/stripe/cancel.php',
]);

header("Location: " . $session->url);
exit;

?>