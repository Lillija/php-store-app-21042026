<?php

class Order
{
    public $id;
    public $customer_id;
    public $status;
    public $order_date;
    public $first_name;
    public $last_name;

    public function __construct($data)
    {
        $this->id = $data['id'] ?? null;
        $this->customer_id = $data['customer_id'];
        $this->status = $data['status'];
        $this->order_date = $data['order_date'];

        // customer data from JOIN
        $this->first_name = $data['first_name'] ?? null;
        $this->last_name = $data['last_name'] ?? null;
    }

    public static function all($status = null)
    {
        $sql = "
            SELECT o.*, c.first_name, c.last_name
            FROM orders o
            JOIN customers c ON o.customer_id = c.id
        ";

        if ($status) {
            $sql .= " WHERE o.status = '" . addslashes($status) . "'";
        }

        $rows = DB::query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return array_map(fn($r) => new self($r), $rows);
    }

    public static function create($data)
    {
        DB::query("
            INSERT INTO orders (customer_id, status, order_date)
            VALUES (
                {$data['customer_id']},
                '" . addslashes($data['status']) . "',
                '" . addslashes($data['order_date']) . "'
            )
        ");
    }
}