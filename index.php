<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment - SmartFitao AI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Deep Green Background */
            background: radial-gradient(circle at center, #027a48 0%, #014d2e 100%);
            overflow: hidden;
            position: relative;
        }

        /* --- THE WHITISH-GREEN CIRCLES --- */
        .circle-bg {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            z-index: 0;
            /* Whitish-Green mix */
            background: rgba(255, 255, 255, 0.15); 
        }

        .circle-1 {
            width: 400px;
            height: 400px;
            top: -100px;
            left: -100px;
            background: rgba(255, 255, 255, 0.1);
        }

        .circle-2 {
            width: 350px;
            height: 350px;
            bottom: -50px;
            right: -50px;
            background: rgba(167, 243, 208, 0.1); /* Minty white */
        }

        .card {
            width: 420px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            color: white;
            z-index: 10; /* Sits above circles */
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 12px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- LOGO CENTERING FIX --- */
        .product-image {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.3);
            background: white;
            /* These three lines ensure it is centered */
            display: block;
            margin: 0 auto 20px auto; 
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 25px;
            line-height: 1.6;
            font-size: 14px;
        }

        .price {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .pay-btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 15px;
            background: #065f46; /* Darker greenish button */
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .pay-btn:hover {
            background: #047857;
            transform: translateY(-2px);
        }

        .secure-text {
            margin-top: 20px;
            font-size: 11px;
            color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>

    <div class="circle-bg circle-1"></div>
    <div class="circle-bg circle-2"></div>

    <div class="card">
        <div class="badge">Secure Stripe Payment</div>

        <img src="1.png" class="product-image" alt="SmartFitao Logo">

        <h1>SmartFitao AI</h1>

        <p>
            Complete your secure payment using Stripe Checkout.<br>
            Fast, safe, and modern payment experience.
        </p>

        <div class="price">
            PKR 300
        </div>

        <form action="checkout.php" method="POST">
            <button type="submit" class="pay-btn">Pay Now</button>
        </form>

        <div class="secure-text">
            Powered by Stripe • Secure Checkout
        </div>
    </div>

</body>
</html>