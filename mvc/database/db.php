<?php
class DataBase
{
    private static $conn = null;

    public static function init()
    {}

    public static function connect()
    {
        return self::$conn;
    }
}