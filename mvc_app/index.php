<?php
    include ('connection.php');
    // DB::getInstance();

    if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
    } else {
    $controller = 'pages';
    $action = 'home';
    }
    require_once('route.php');
?>