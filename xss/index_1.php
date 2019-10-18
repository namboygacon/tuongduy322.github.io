<?php
    require ('functions.php');

    if (isset($_GET['btn'])) {
        if (isset($_GET['mail'])) {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbName = "xss";

            $date = new DateTime('+1 week');
            setCookie('cookies', 'abc', $date->getTimestamp());
            $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
            if ($db) {
                $mail = $_GET['mail'];
                $query = $db->prepare("select mail_name from mail where name=:mail");
                $query->execute([
                    'mail' => $mail
                ]);
                $result = $query->fetchObject();
                if ($result) {
                    echo $result->mail_name;
                } 
            } else {
                echo "Loi ket noi";
            }
        }
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
    <h2>Xss</h2>
    <form method="get" id="form">
        <label for="mail">Mail</label> 
        <input type="text" name="mail" id="mail"/>
        <div>
            <input type="submit" name="btn" id="submit"/>
        </div>
    </form>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        $("#form").submit(function (e) {
            // e.preventDefault();
        })
    </script>
</body>
</html>