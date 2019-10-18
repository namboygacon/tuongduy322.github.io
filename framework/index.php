<?php
    // Composer
    require 'vendor/autoload.php';
    // Twig
    Twig_Autoloader::register();

    $time = date('d-M-Y');
    $logger = new \vendor\logger\Log('vendor/logger/logs/log-' . $time . '.txt');
    $session_ = new \vendor\sessionDB\Session();
    \Core\Router::addRoute('', ['controller' => 'Home', 'action' => 'index']);
    \Core\Router::addRoute('{controller}/{action}');
    \Core\Router::addRoute('{controller}/{id:\d+}/{action}');
    \Core\Router::addRoute('admin/{controller}/{action}', ['namespace' => 'admin']);
    \Core\Router::dispatch($_SERVER['QUERY_STRING']);
?>