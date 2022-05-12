<?php

class Database
{
    public static function connect()
    {
        try {
            return new PDO("mysql:host=127.0.0.1; dbname=tundesign", "root", "");
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
            return die();
        }
    }
}
