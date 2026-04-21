<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index()
    {
        $stmt = DB::query("SELECT * FROM customers");
        $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<h1>Customers</h1>";

        foreach ($customers as $c) {
            echo "<p>{$c['first_name']} {$c['last_name']}</p>";
        }
    }
}