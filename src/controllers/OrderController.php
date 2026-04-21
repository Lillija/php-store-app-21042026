<?php

require_once __DIR__ . '/../models/Order.php';
require_once __DIR__ . '/../models/Customer.php';
require_once __DIR__ . '/../../db/DB.php';

class OrderController
{
    public static function index($status = null)
    {
        $orders = Order::all($status);
        require __DIR__ . '/../views/orders.php';
    }

    public static function create()
    {
        $customers = Customer::all();
        require __DIR__ . '/../views/orders_create.php';
    }

    public static function store($data)
    {
        Order::create($data);
        header("Location: /orders");
        exit;
    }

    public static function delete($id)
{
    DB::query("DELETE FROM orders WHERE id = " . (int)$id);

    header("Location: /orders");
    exit;
}
}
