<?php

require __DIR__ . '/../db/connect.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($requestUri === '/customers') {

    $stmt = $pdo->query("SELECT * FROM customers");
    $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Customers</h1>";

    foreach ($customers as $c) {
        echo "<p>{$c['first_name']} {$c['last_name']}</p>";
    }

} else {
    echo "<h1>Veikals</h1>";
}