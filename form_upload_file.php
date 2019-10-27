<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="form_upload_file.php" enctype="multipart/form-data">
        <input type="file" name="user_file"/>
        <br>
        <input type="submit" name="btn" value="upload">
    </form>
</body>
</html>

<?php

    define("FILE_REPONSITORY", 'E:\xampp\htdocs\Traning PHP\Tuan 1\public\img\\');

    if (!empty($_POST['btn'])) {
        
        if (is_uploaded_file($_FILES['user_file']['tmp_name'])) {

            if ($_FILES['user_file']['error'] > 0) {

                echo "File error";
            } else {

                // if ($_FILES['user_file']['type'] !== "image/png") {
                    
                //     echo '<script>alert("Sai định dạng file")</script>';
                //     return 0;
                // }

                $result = move_uploaded_file($_FILES['user_file']['tmp_name'], FILE_REPONSITORY . $_FILES['user_file']['name']);
                
                if ($result) {
                    
                    echo ('<script>alert("upload file thành công")</script>');
                } else {

                    echo ('<script>alert("Lỗi trong lúc upload")</script>');
                }
            }
        } else {

            echo "Bạn chưa upload";
        }
    }
?>
