<?php

class DB
{
    public static $pdo;

    public static function connect()
    {
        self::$pdo = new PDO("mysql:host=192.168.208.1;dbname=store_dev", "store_app", "password");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function query($sql)
    {
        return self::$pdo->query($sql);
    }
}