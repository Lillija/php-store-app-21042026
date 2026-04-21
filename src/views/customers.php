<h1>Customers</h1>

<ul>
    <?php foreach ($customers as $c): ?>
        <li>
            <?= $c['first_name'] . ' ' . $c['last_name'] ?>

            <?php if (!empty($c['orders'])): ?>
                <ul>
                    <?php foreach ($c['orders'] as $o): ?>
                        <li><?= $o['status'] ?> - <?= $o['order_date'] ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>