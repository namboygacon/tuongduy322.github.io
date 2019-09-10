<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Jquery - Ajax</h2>
    <div id="result">
        Nội dung từ server
    </div>
    <input type="submit" name="btn" value="Send" onclick="load_ajax()"/>
    <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        function load_ajax () {

           $.ajax({
               url: "result.php",
               type: "post",
               dataType: "text",
               data: {

               },
               success: function (result) {

                    $("#result").html(result);
               }
           });
        }    
    </script>
    
</body>
</html>