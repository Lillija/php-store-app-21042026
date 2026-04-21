<?php

require_once __DIR__ . '/../models/Customer.php';
require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index($withOrders = null)
    {
        if ($withOrders === 'full') {
            $customers = Customer::withOrders();
        } else {
            $customers = Customer::all();
        }

        require __DIR__ . '/../views/customers.php';
    }
}