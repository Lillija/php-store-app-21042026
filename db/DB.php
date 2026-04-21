<?php

class DB
{
    public static $pdo;

    public static function connect()
    {
        $host = '192.168.208.1';
        $dbname = 'store_dev';

        self::$pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8",
            "store_app",
            "password"
        );

        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function query($sql)
    {
        return self::$pdo->query($sql);
    }
}