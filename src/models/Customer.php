<?php

class Customer
{
    public static function all()
    {
        return DB::query("SELECT * FROM customers")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function withOrders()
    {
        $customers = self::all();

        foreach ($customers as &$c) {
            $c['orders'] = DB::query(
                "SELECT * FROM orders WHERE customer_id = {$c['id']}"
            )->fetchAll(PDO::FETCH_ASSOC);
        }

        return $customers;
    }
}