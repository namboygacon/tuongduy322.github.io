<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Demo cookie</h2>
    <div>
        <?php
            if (isset($_COOKIE['user'])) {

                echo $_COOKIE['user'];
            } else {

                echo "welcome";
            }
        ?>
    </div>
</body>
</html>