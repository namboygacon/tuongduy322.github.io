<?php

    $path = __DIR__ . "\public\cache\data.txt";
    // Create an Object
    $file = new SplFileObject($path, "r");

    // Read 10 byte from file
    // $data = $file->fread(60);
    // Print Result
    // echo $data;

    // Reached end of file 
    // $file->eof()
    
    foreach ($file as $data => $line) {
        
        echo $line, "<br>";
    }
?>