<?php require __DIR__ . '/partials/nav.php'; ?>

<link rel="stylesheet" href="/assets/style.css">

<h1>Customers</h1>

<div>
    <a href="/customers?filter=all">All</a> |
    <a href="/customers?filter=with-orders">With orders</a> |
    <a href="/customers?filter=no-orders">No orders</a>
</div>

<table border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Points</th>
        <th>Orders</th>
    </tr>

    <?php foreach ($customers as $c): ?>
        <tr>
            <td><?= $c->first_name . ' ' . $c->last_name ?></td>
            <td><?= $c->email ?></td>
            <td><?= $c->points ?></td>
            <td>
                <?php if (!empty($c->orders)): ?>
                    <?php foreach ($c->orders as $o): ?>
                        <?= $o['status'] ?> (<?= $o['order_date'] ?>)<br>
                    <?php endforeach; ?>
                <?php else: ?>
                    No orders
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>