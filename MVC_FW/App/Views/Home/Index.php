<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Output escaping</h2>
    <h2>Welcome <?= $name ?></h2>
    <ul>
        <?php
            foreach ($color as $key => $value) {
                echo "<li>$value</li>";
            }    
        ?>
    </ul>
</body>
</html>