<?php require __DIR__ . '/partials/nav.php'; ?>

<link rel="stylesheet" href="/assets/style.css">

<h1>Orders</h1>

<!-- CREATE BUTTON -->
<div style="margin-bottom: 15px;">
    <a href="/orders/create"
       style="background:#ef4444;color:white;padding:8px 12px;border-radius:5px;display:inline-block;">
        + New Order
    </a>
</div>

<!-- FILTERS -->
<div style="margin-bottom: 20px;">
    <a href="/orders">All</a> |
    <a href="/orders?status=pending">Pending</a> |
    <a href="/orders?status=completed">Completed</a> |
    <a href="/orders?status=cancelled">Cancelled</a>
</div>

<!-- TABLE -->
<table border="1" cellpadding="8">
    <tr>
        <th>Customer</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

    <?php foreach ($orders as $o): ?>
        <tr>
            <td><?= $o->first_name . ' ' . $o->last_name ?></td>
            <td><?= $o->status ?></td>
            <td><?= $o->order_date ?></td>
            <td>
                <a href="/orders/delete?id=<?= $o->id ?>"
                   onclick="return confirm('Delete this order?')"
                   style="color:red;">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>