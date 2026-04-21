<?php

class OrderController
{
    public static function index()
    {
        $orders = DB::query("
            SELECT o.*, c.first_name, c.last_name
            FROM orders o
            JOIN customers c ON o.customer_id = c.id
        ")->fetchAll(PDO::FETCH_ASSOC);

        require __DIR__ . '/../views/orders.php';
    }
}