<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "sql_injection";

    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    if ($pdo) {
        // '; drop table forum_topics; --
        if (isset ($_POST['btn'])) {
            if (isset ($_POST['mail'])) {
                $mail = $_POST['mail'];
                // $query = "select mail from mail where user='{$mail}'";
                // $result = $pdo->query($query);
                // if ($result->rowCount()) {
                //     $result = $result->fetchObject();
                //     echo $result->mail;
                // }
                $query = $pdo->prepare("select mail from mail where user=:mail");
                $query->bindParam(':mail', $mail);
                if ($query->execute()) {
                    $result = $query->fetchObject();
                    if ($result) {
                        echo $result->mail;
                    }
                } else {
                    echo '<pre>';
                    print_r($query->errorInfo());
                    echo 'Không thể update dữ liệu';
                }
            }
        }
    } else {
        echo "Kết nới thất bại";
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail"/>
        </div>
        <input type="submit" name="btn" id="btn"/>
    </form>
</body>
</html>