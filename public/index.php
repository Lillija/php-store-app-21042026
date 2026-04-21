<?php

require __DIR__ . '/../db/DB.php';
require __DIR__ . '/../src/models/Customer.php';
require __DIR__ . '/../src/models/Order.php';
require __DIR__ . '/../src/controllers/CustomerController.php';
require __DIR__ . '/../src/controllers/OrderController.php';

DB::connect();

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/* HOME */
if ($requestUri === '/') {

    $customersCount = DB::query("SELECT COUNT(*) AS count FROM customers")->fetch()['count'];
    $ordersCount = DB::query("SELECT COUNT(*) AS count FROM orders")->fetch()['count'];

    require __DIR__ . '/../src/views/home.php';
}

/* CUSTOMERS */
if ($requestUri === '/customers') {
    $filter = $_GET['filter'] ?? 'all';
    CustomerController::index($filter);
}

/* ORDERS */
if ($requestUri === '/orders') {
    $status = $_GET['status'] ?? null;
    OrderController::index($status);
}

/* CREATE ORDER */
if ($requestUri === '/orders/create') {
    OrderController::create();
}

if ($requestUri === '/orders/store') {
    OrderController::store($_POST);
}

if ($requestUri === '/orders/delete') {
    OrderController::delete($_GET['id']);
}