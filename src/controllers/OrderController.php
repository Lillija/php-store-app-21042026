<?php

class OrderController
{
    public static function index($status = null)
{
    $sql = "
        SELECT o.*, c.first_name, c.last_name
        FROM orders o
        JOIN customers c ON o.customer_id = c.id
    ";

    if ($status) {
        $sql .= " WHERE o.status = '" . $status . "'";
    }

    $orders = DB::query($sql)->fetchAll(PDO::FETCH_ASSOC);

    require __DIR__ . '/../views/orders.php';
}
}