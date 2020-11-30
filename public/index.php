<?php

//session_start();

use CashMachine\Core\Router;

require __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '');
$twig = new Environment($loader);


error_reporting(E_ALL);
$GLOBALS[$rootUrl] = 'http://localhost:8080/';


$router = new Router();

$router->add('/', ['controller' => 'Index', 'action' => 'index']);
$router->add('/{controller}/{action}');
$router->add('/{controller}/{action}/{id:\d+}');

$router->dispatch($_SERVER['REQUEST_URI']);
