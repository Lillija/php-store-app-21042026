<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a; /* dark navy */
            color: #e2e8f0; /* soft light text */
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #ef4444; /* red accent */
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border-collapse: collapse;
            background: #1e293b; /* dark card */
        }

        th, td {
            padding: 12px;
            border: 1px solid #334155;
            text-align: left;
        }

        th {
            background: #111827;
            color: #f87171; /* soft red */
        }

        tr:hover {
            background: #273449;
        }

        .orders {
            font-size: 13px;
            color: #cbd5e1;
        }

        .no-orders {
            color: #64748b;
            font-style: italic;
        }
    </style>
</head>
<body>

<h1>Customers</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Points</th>
        <th>Orders</th>
    </tr>

    <?php foreach ($customers as $c): ?>
        <tr>
            <td><?= $c['first_name'] . ' ' . $c['last_name'] ?></td>
            <td><?= $c['email'] ?></td>
            <td><?= $c['points'] ?></td>
            <td>
                <?php if (!empty($c['orders'])): ?>
                    <div class="orders">
                        <?php foreach ($c['orders'] as $o): ?>
                            <?= $o['status'] ?> (<?= $o['order_date'] ?>)<br>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <span class="no-orders">No orders</span>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>