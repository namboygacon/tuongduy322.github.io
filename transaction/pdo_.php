<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "languages";

    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    if ($pdo) {
        echo "Kết nối thành công";
        $pdo->beginTransaction();
        $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
        $data_2 = array (
            'INSERT INTO `languages` (`lang`) values ("PHP");',
            'INSERT INTO `languages` (`lang`) values ("Ruby");',
            'INSERT INTO `languages` (`lang2`) values ("Python");',
            'INSERT INTO `languages` (`lang`) values ("Objective-C");',
            'INSERT INTO `languages` (`lang`) values ("Go");'
        );

        $flg = 0;
        $rollBackFlg = 0;

        for ($i = 0; $i < count($data_2); $i ++) {
            $tmpt = $pdo->prepare($data_2[$i]);
            if ($tmpt->execute()) {
                echo "[$i] Done", '<br>';
            } else {
                $flg = 1;
            }
        }
        
        if ($flg == 1) {
            $pdo->rollBack();
            $rollBackFlg = 1;
        }
        if ($rollBackFlg != 1) {
            $pdo->commit();
        }
    } else {
        echo "Kết nối thất bại";
    }
?>