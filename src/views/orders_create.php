<?php require __DIR__ . '/partials/nav.php'; ?>

<h1>Create Order</h1>

<form method="POST" action="/orders/store">

    <label>Customer:</label>
    <select name="customer_id">
        <?php foreach ($customers as $c): ?>
            <option value="<?= $c['id'] ?>">
                <?= $c['first_name'] . ' ' . $c['last_name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Status:</label>
    <input type="text" name="status" required>

    <br><br>

    <label>Date:</label>
    <input type="date" name="order_date" required>

    <br><br>

    <button type="submit">Create</button>
</form>