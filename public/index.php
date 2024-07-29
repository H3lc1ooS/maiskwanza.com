<?php

require "../vendor/autoload.php";

use Dotenv\Dotenv;

require "../routes/router.php";

$path = dirname(__FILE__, 2);
$dotenv = Dotenv::createImmutable($path);
$dotenv->load();

try {
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
    $request = $_SERVER["REQUEST_METHOD"];

    if (!isset($router[$request])) {
        throw new Exception("A rota não existe");
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception("A rota não existe");
    }

    $controller = $router[$request][$uri];
    $controller();
} catch (Exception $e) {
    $e->getMessage();
}
