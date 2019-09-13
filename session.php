<?php
    session_start();

    if (isset($_POST['btn_set'])) {
        // Set session
        $_SESSION['name'] = $_POST['username'];
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
    <div>
        <?php
            // Get session
            if(isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            }
        ?>
    </div>

    <form method="post" action="session.php">
        <input type="text" name="username" value="" id="user_name"/>
        <input type="submit" name="btn_set" value="Save session"/>
        <input type="button" name="btn_clear_session" value="Clear session" id="clear_btn" onclick="load_script()"/>
    </form>
    <div id="result"><div>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        function load_script () {
            $.post(
                "clear_session.php",
                {
                    "user_name": $("#user_name").val()
                },
                function (result) {

                    $("#result").html(result)
                },
                "text"
            );
        }
    </script>
</body>
</html>