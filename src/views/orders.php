<?php require __DIR__ . '/partials/nav.php'; ?>

<link rel="stylesheet" href="/assets/style.css">

<h1>Orders</h1>

<div>
    <a href="/orders">All</a> |
    <a href="/orders?status=pending">Pending</a> |
    <a href="/orders?status=completed">Completed</a> |
    <a href="/orders?status=cancelled">Cancelled</a>
</div>

<br>

<a href="/orders/create">+ New Order</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Customer</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($orders as $o): ?>
        <tr>
            <td><?= $o->first_name . ' ' . $o->last_name ?></td>
            <td><?= $o->status ?></td>
            <td><?= $o->order_date ?></td>
        </tr>
    <?php endforeach; ?>
</table>