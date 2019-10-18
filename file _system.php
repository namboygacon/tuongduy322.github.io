<?php
    $path = __DIR__ . '\public\cache\test.txt';
    $fp = @fopen($path, 'a+');

    if (!$fp) {

        echo "Mở file thất bại";
    } else {

        // // read file via character
        // while (!feof($fp)) {
        //     echo fgetc($fp);
        // }

        // read file via line
        // while (!feof($fp)) {
            
        //     echo fgets($fp);
        // }

        // read all file
        // $data = fread($fp, filesize($path));

        // read with new line
        // echo nl2br(file_get_contents($path));

        // write file
        $newData = PHP_EOL . "Andrew Mead";
        fwrite($fp, $newData);

        $data = nl2br(file_get_contents($path));
        echo $data;

        // close stream file
        fclose($fp);

    }
?>