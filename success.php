<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - SmartFitao AI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background: radial-gradient(circle at center, #027a48 0%, #014d2e 100%);
            overflow:hidden;
            position:relative;
        }

        .circle{
            position:absolute;
            border-radius:50%;
            filter:blur(100px);
            background:rgba(255,255,255,0.1);
        }

        .circle1{
            width:400px;
            height:400px;
            top:-100px;
            left:-100px;
        }

        .circle2{
            width:300px;
            height:300px;
            bottom:-80px;
            right:-80px;
        }

        .card{
            width:420px;
            background:rgba(255,255,255,0.1);
            border:1px solid rgba(255,255,255,0.2);
            backdrop-filter:blur(20px);
            border-radius:30px;
            padding:40px;
            text-align:center;
            color:white;
            box-shadow:0 25px 50px rgba(0,0,0,0.3);
            z-index:10;
        }

        .success-icon{
            width:100px;
            height:100px;
            margin:0 auto 25px;
            border-radius:50%;
            background:#10b981;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:50px;
            font-weight:bold;
            box-shadow:0 10px 30px rgba(16,185,129,0.4);
        }

        h1{
            font-size:32px;
            margin-bottom:15px;
        }

        p{
            color:rgba(255,255,255,0.8);
            line-height:1.7;
            margin-bottom:30px;
        }

        .btn{
            display:inline-block;
            padding:15px 30px;
            background:#065f46;
            color:white;
            text-decoration:none;
            border-radius:15px;
            transition:0.3s;
            font-weight:600;
        }

        .btn:hover{
            background:#047857;
            transform:translateY(-2px);
        }

    </style>
</head>
<body>

<div class="circle circle1"></div>
<div class="circle circle2"></div>

<div class="card">

    <div class="success-icon">
        ✓
    </div>

    <h1>Payment Successful</h1>

    <p>
        Thank you for your payment.<br>
        Your transaction has been completed successfully.
    </p>

    <a href="index.php" class="btn">
        Back to Home
    </a>

</div>

</body>
</html>