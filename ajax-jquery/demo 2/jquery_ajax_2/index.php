<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="text" name="num" value="" id="num"/>
    <div id="result">Kết quả trả về</div>
    <input type="submit" name="btn" value="Send" onclick="load_ajax ()"/>
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        function load_ajax () {
            var input = $("#num").val();
            $.post (
                "result.php",
                {
                    "number" : input
                },
                function (result) {
                    // $("#result").html(result);
                    var sum = result.sum;
                    var multi = result.mul;
                    var html = "Tổng là: " + sum + "<br>";
                    html += ("Tích là " + multi);
                    $("#result").html(html);
                },
                "json"
            );
        }
    </script>
</body>
</html>