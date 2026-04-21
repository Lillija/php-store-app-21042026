<?php require __DIR__ . '/partials/nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #ef4444;
            margin-bottom: 30px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #1e293b;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }

        .stat {
            font-size: 20px;
            margin: 15px 0;
        }

        .label {
            color: #f87171;
        }
    </style>
</head>
<body>

<h1>Dashboard</h1>

<div class="container">
    <div class="stat">
        <span class="label">Customers:</span>
        <?= $customersCount ?>
    </div>

    <div class="stat">
        <span class="label">Orders:</span>
        <?= $ordersCount ?>
    </div>
</div>

</body>
</html>