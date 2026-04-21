<?php

$pdo = new PDO("mysql:host=192.168.208.1;dbname=store_dev", "store_app", "password");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);