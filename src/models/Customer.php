<?php

class Customer
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $points;
    public $orders = [];

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->email = $data['email'];
        $this->points = $data['points'];
    }

    public static function all()
    {
        $rows = DB::query("SELECT * FROM customers")->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn($r) => new self($r), $rows);
    }

    public static function withOrders()
    {
        $customers = self::all();

        foreach ($customers as $c) {
            $c->orders = DB::query("
                SELECT * FROM orders WHERE customer_id = {$c->id}
            ")->fetchAll(PDO::FETCH_ASSOC);
        }

        return $customers;
    }

    public static function withOrdersOnly()
    {
        $customers = self::withOrders();

        return array_values(array_filter($customers, fn($c) =>
            !empty($c->orders)
        ));
    }

    public static function withoutOrders()
    {
        $customers = self::withOrders();

        return array_values(array_filter($customers, fn($c) =>
            empty($c->orders)
        ));
    }
}