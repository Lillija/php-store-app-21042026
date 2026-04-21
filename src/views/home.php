<?php require __DIR__ . '/partials/nav.php'; ?>

<link rel="stylesheet" href="/assets/style.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

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