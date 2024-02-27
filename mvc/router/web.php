<?php
include "../database/config.php";
include "../database/db.php";



class Router
{
    private static $routes = [];

    public static function route($dir, $file)
    {
        self::$routes["/" . $dir] = "./$file";
    }

    public static function init()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($url == '/') {
            header('Location: /home');
            exit();
        }
        if (array_key_exists($url, self::$routes)) {
            include self::$routes[$url] . ".php";
        } else {
            include './login.php';
        }
    }
}

Router::route("login", "views/login");


if (isset($_SESSION['login'])) {
}

Router::init();
