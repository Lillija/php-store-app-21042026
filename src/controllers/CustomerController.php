<?php

require_once __DIR__ . '/../models/Customer.php';
require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index($filter = 'all')
    {
        if ($filter === 'with-orders') {
            $customers = Customer::withOrdersOnly();
        } elseif ($filter === 'no-orders') {
            $customers = Customer::withoutOrders();
        } else {
            $customers = Customer::withOrders();
        }

        require __DIR__ . '/../views/customers.php';
    }
}