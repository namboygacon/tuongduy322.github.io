<?php
    session_start();

    if (isset($_POST['btn'])) {
        
        $userName = $_POST["username"];
        $passWord = $_POST["password"];

        $_SESSION['user'] = $userName;

        if (isset($_COOKIE['userinfo'])) {
            $info = $_COOKIE['userinfo'];
            echo $info;
        }
    }
?>