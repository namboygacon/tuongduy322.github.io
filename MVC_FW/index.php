<?php
    // require_once dirname(__DIR__) . '/convert_mvc/vendor/twig/Twig/lib/Twig/AutoLoader.php';
    // Composer
    require 'vendor/autoload.php';
    // Twig
    Twig_Autoloader::register();
    // spl_autoload_register(function ($class) {
    //     $root = __DIR__;   // get the parent directory
    //     $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    //     if (is_readable($file)) {
    //         require $root . '/' . str_replace('\\', '/', $class) . '.php';
    //     }
    // });
    $time = date('d-M-Y');
    $logger = new \vendor\logger\Log('vendor/logger/logs/log-' . $time . '.txt');
    $session_ = new \vendor\sessionDB\Session();
    $_SESSION['status'] = 0;
    \Core\Router::addRoute('', ['controller' => 'Home', 'action' => 'index']);
    \Core\Router::addRoute('{controller}/{action}');
    \Core\Router::addRoute('{controller}/{id:\d+}/{action}');
    \Core\Router::addRoute('admin/{controller}/{action}', ['namespace' => 'admin']);

    \Core\Router::dispatch($_SERVER['QUERY_STRING']);
?>