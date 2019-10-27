<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form_post.php" method="POST">
        <input type="text" name="txt"/>
        <input type="submit" name="btn" value="Submit"/>
    </form>
</body>
</html>

<?php
    if (!empty($_POST['btn'])) {

        $year = isset($_POST['txt']) ? (int) $_POST['txt'] : 0;
        $currentYear = date('Y');

        if ($year <= 0) {

            echo "Năm sinh không hợp lệ.";
        } elseif ($year > $currentYear) {

            echo "Năm sinh bạn nhập lớn hơn năm hiện tại.";
        } else {
            
            $age = $currentYear - $year;

            echo "Tuổi của bạn $age";
        }
    }
?>