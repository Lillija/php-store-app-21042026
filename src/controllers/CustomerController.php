<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index($withOrders = null)
{
    $customers = DB::query("SELECT * FROM customers")->fetchAll(PDO::FETCH_ASSOC);

    if ($withOrders === 'full') {
        foreach ($customers as &$c) {
            $c['orders'] = DB::query(
                "SELECT * FROM orders WHERE customer_id = {$c['id']}"
            )->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    require __DIR__ . '/../views/customers.php';
}
}