<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
        <input type="text" name="username" id="user_name" value=""/>
        <input type="button" name="btn" value="Login" onclick="logIn()"/>
    </form>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        function logIn () {
            $.post(
                "set_cookie.php",
                {
                    "user" : $("#user_name").val()
                },
                function (result) {
                    window.location.replace("./index.php");
                },
                "text"
            );
        }
    </script>
</body>
</html>