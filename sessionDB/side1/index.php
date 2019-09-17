<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Lưu session</h2>
    <form>
        <label>Session ID: </label>
        <input type="text" name="id" value="" id="id"/><br>
        <label>Value: </label>
        <input type="text" name="value" value="" id="value"/><br>
        <input type="button" name="btn" value="Save" onclick="create_session()"/>
    </form>
    <div id="result"></div>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        function create_session () {
            $.post(
                "result.php",
                {
                    "id": $("#id").val(),
                    "value": $("#value").val()
                },
                function (result) {
                    $("#result").html(result);
                },
                "text"
            );
        }
    </script>
</body>
</html>