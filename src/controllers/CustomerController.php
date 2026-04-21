<?php

class CustomerController
{
    public static function index($pdo)
    {
        $stmt = $pdo->query("SELECT * FROM customers");
        $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<h1>Customers</h1>";

        foreach ($customers as $c) {
            echo "<p>{$c['first_name']} {$c['last_name']}</p>";
        }
    }
}