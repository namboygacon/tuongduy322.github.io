<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="set_session.php">
        <input type="text" name="username" value="" id="username"/><br>
        <input type="text" name="password" value="" id="password"><br>
        <input class="checkbox" type="checkbox" name="remember"/>Remember<br>
        <input type="submit" name="btn" value="Login"/>
    </form>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        $(".checkbox").change(function() {
            if(this.checked) {
                var now = new Date();
                var time = now.getTime();
                time += 3600;
                now.setTime(time);
                var info = {
                    'username' : $("#username").val(),
                    'password' : $("#password").val()
                }
                info = JSON.stringify(info);
                var cookieInfo = 'userinfo=' + info + '; expires=' + now.toUTCString();
                document.cookie = cookieInfo;
            } else {

                console.log("unchecked");
            }
        });
    </script>
</body>
</html>