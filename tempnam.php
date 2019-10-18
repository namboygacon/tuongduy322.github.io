<?php
    $path = __DIR__;
    $path .= "/public/cache/";
    
    $fileName = tempnam($path, "new_file");
    rename($fileName, $fileName = $path . 'temp_file_ppp.txt');

    $fp = @fopen($fileName, "w");
    if (!$fp) {
        
        echo "File không tồn tại";
    } else {

        fwrite($fp, "New content write to file");
    }
    fclose($fp)
?>