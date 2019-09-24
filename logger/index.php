<?php
    include_once('./log.php');

    $logger = new Log();
    // $logger->write('text.txt', "\rMy name is andrew");
    //  echo nl2br($logger->read('text.txt'));
    echo $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'];
?>