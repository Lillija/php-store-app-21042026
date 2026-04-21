<?php require __DIR__ . '/partials/nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a; /* dark navy */
            color: #e2e8f0;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #ef4444;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            border-collapse: collapse;
            background: #1e293b;
        }

        th, td {
            padding: 12px;
            border: 1px solid #334155;
            text-align: left;
        }

        th {
            background: #111827;
            color: #f87171;
        }

        tr:hover {
            background: #273449;
        }

        .status {
            color: #cbd5e1;
        }

        .completed {
            color: #22c55e;
            font-weight: bold;
        }

        .pending {
            color: #facc15;
            font-weight: bold;
        }

        .cancelled {
            color: #ef4444;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Orders</h1>

<table>
    <tr>
        <th>Customer</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($orders as $o): ?>
        <tr>
            <td><?= $o['first_name'] . ' ' . $o['last_name'] ?></td>
            <td class="<?= $o['status'] ?>">
                <?= $o['status'] ?>
            </td>
            <td><?= $o['order_date'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>