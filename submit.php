<?php

require('config.php');

if (isset($_POST['stripeToken'])) {

    $token = $_POST['stripeToken'];

    try {

        $charge = \Stripe\Charge::create([
            "amount" => 10000,
            "currency" => "pkr",
            "description" => "Test Payment",
            "source" => $token,
        ]);

        header("Location: success.php");
        exit;

    } catch (Exception $e) {
        echo "Payment failed: " . $e->getMessage();
    }
}

?>