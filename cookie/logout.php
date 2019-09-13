<?php
    if (isset($_COOKIE['user'])) {

        $userName = $_COOKIE["user"];
        setcookie('user', $userName, time() - 3600);
        header ("Location: ./index.php");
    }
?>