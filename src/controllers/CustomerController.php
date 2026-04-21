<?php

require_once __DIR__ . '/../models/Customer.php';
require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index()
    {
        $customers = Customer::withOrders();

        require __DIR__ . '/../views/customers.php';
    }
}