<?php

require __DIR__ . '/../db/DB.php';
require __DIR__ . '/../src/controllers/CustomerController.php';
require __DIR__ . '/../src/controllers/OrderController.php';

DB::connect();

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($requestUri === '/customers') {
    $withOrders = $_GET['with-orders'] ?? null;
    CustomerController::index($withOrders);
}

if ($requestUri === '/orders') {
    $status = $_GET['status'] ?? null;
    OrderController::index($status);
}

if ($requestUri === '/') {

    $customersCount = DB::query("SELECT COUNT(*) AS count FROM customers")
        ->fetch()['count'];

    $ordersCount = DB::query("SELECT COUNT(*) AS count FROM orders")
        ->fetch()['count'];

    require __DIR__ . '/../src/views/home.php';
}