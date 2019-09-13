<?php
    $userName = $_POST["user"];
    setcookie("user", $userName, time() + 300);
?>