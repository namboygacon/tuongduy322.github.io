<?php
    include_once ('./log.php');
    $time = date('d-M-Y');
    $logger = new Log('./logs/log-' . $time . '.txt');
    
    $logger->info("this is the info message");
    $logger->error("this is the error message");
    $logger->warning("this is warning message");
    $logger->debug("this is debug message");
    $logger->error("this is error message");

?>