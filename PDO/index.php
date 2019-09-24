<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "qlbh";
    // Connect db
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    if ($conn) {

        //  Insert data into db
        // $tmpt = $conn->prepare('INSERT INTO sanpham values (:masp, :tensp, :dvt, :nuocsx, :gia)');
                
        // $masp = 'TV10';
        // $tensp = 'Tap 600 trang';
        // $dvt = "chuc nghin";
        // $nuocsx = 'Viet Nam';
        // $gia = 300000;

        // $tmpt->bindParam(':masp', $masp);
        // $tmpt->bindParam(':tensp', $tensp);
        // $tmpt->bindParam(':dvt', $dvt);
        // $tmpt->bindParam(':nuocsx', $nuocsx);
        // $tmpt->bindParam(':gia', $gia);

        // Select data from db
        // $nuocsx = 'Trung Quoc';

        // $tmpt = $conn->prepare("SELECT * FROM sanpham WHERE nuocsx = :nuocsx");
        // $tmpt->bindParam(':nuocsx', $nuocsx);
        // $tmpt->setFetchMode(PDO::FETCH_ASSOC);

        // Insert multi row into db

        // $tmpt = $conn->prepare('INSERT INTO sanpham values (:masp, :tensp, :dvt, :nuocsx, :gia)');
        // $tmpt->bindParam(':masp', $masp);
        // $tmpt->bindParam(':tensp', $tensp);
        // $tmpt->bindParam(':dvt', $dvt);
        // $tmpt->bindParam(':nuocsx', $nuocsx);
        // $tmpt->bindParam(':gia', $gia);

        // $data = array (
        //     array ('TV11', 'Tap 700 trang', 'chuc', 'Trung Quoc', 500000),
        //     array ('TV12', 'Tap 200 trang', 'tram nghin', 'Han Quoc', 550000),
        //     array ('TV13', 'Tap 900 trang', 'chuc trieu', 'US', 670000),
        //     array ('TV14', 'Tap 850 trang', 'trieu', 'Viet Name', 680000),
        //     array ('TV15', 'Tap 890 trang', 'nghin', 'Thai Lan', 450000),
        //     array ('TV16', 'Tap 600 trang', 'tram', 'Trung Quoc', 480000)
        // );

        // for ($i = 0; $i < count($data); $i ++) {
        //     $masp = $data[$i][0];
        //     $tensp = $data[$i][1];
        //     $dvt = $data[$i][2];
        //     $nuocsx = $data[$i][3];
        //     $gia = $data[$i][4];

        //     if ($tmpt->execute()) {

        //         echo "[$i] Done", '<br>';
        //     } else {

        //         echo "[$i] fail", '<br>';
        //     }
        // }

        // if ($tmpt->execute()) {
            
        //     // while($row = $tmpt->fetch()) {
                
        //     //     echo "<pre>";
        //     //     print_r($row);
        //     // }
            
        //     // echo '<pre>';
        //     // print_r($tmpt->fetchAll());
        // } else {

        //     echo "Không thể thực hiện truy vấn";
        // }

        // Get all data from db
        // $tmpt = $conn->prepare('SELECT * FROM sanpham');
        // $tmpt->setFetchMode(PDO::FETCH_OBJ);
        
        // if ($tmpt->execute()) {

        //     $results = $tmpt->fetchAll();
            
        //     if ($tmpt->rowCount()) {
                
        //         foreach ($results as $result) {
        //             echo $result->masp, ', ', $result->tensp, '<br>';
        //         }
        //     }
        // } else {

        //     echo 'Lỗi truy vấn';
        // }

        // Update data
        $tmpt = $conn->prepare("UPDATE sanpham SET gia=:gia, nuocsx=:nuocsx WHERE dvt=:dvt");
        $tmpt->bindParam(':gia', $gia);
        $tmpt->bindParam(':nuocsx', $nuocsx);
        $tmpt->bindParam(':dvt', $dvt);
        // $nuoc = "'MI'";
        $gia = 30000;
        $nuocsx = "Trung Quoc";
        $dvt = 'quyen';

        if ($tmpt->execute()) {

            echo 'Update thành công';
        } else {
            echo '<pre>';
            print_r($tmpt->errorInfo());
            echo 'Không thể update dữ liệu';
        }

        // Delete an item
        // "SELECT * FROM sanpham WHERE nuocsx = :nuocsx"

        // $tmpt = $conn->prepare("DELETE FROM `cthd` WHERE `sohd`=:sohd");
        // $tmpt->bindParam(':sohd', $sohd);
        // $sohd = 1001;
        
        // if ($tmpt->execute()) {

        //     echo 'Đã xóa';
        // } else {
        //     // show error
        //     echo "<pre>";
        //     var_dump($tmpt->errorInfo());
        //     echo 'Xóa thất bại';
        // }

    } else {

        echo "Kết nối thất bại";
    }