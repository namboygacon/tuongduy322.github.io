<?php

    $path = __DIR__;
    $path .= "\public\img\uchiha1.png";
    $file = $path;
    $filetype=filetype($file);
    $filename=basename($file);

    header ("Content-Type: ".$filetype);
    header ("Content-Length: ".filesize($file));
    header ("Content-Disposition: attachment; filename=".$filename);
    readfile($file);
?>