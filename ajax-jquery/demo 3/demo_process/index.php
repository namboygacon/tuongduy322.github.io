<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #progress-bar {
            background-color: #12CC1A;
            height: 20px;
            color: #FFFFFF;
            width: 0%;
            -webkit-transition: width .3s;
            -moz-transition: width .3s;
            transition: width .3s;
        }
    </style>
</head>
<body>
<form id="uploadForm" action="upload.php" method="post">
    <div>
        <input name="userImage" id="userImage" type="file" class="demoInputBox" />
    </div>
    <div><input type="submit" id="btnSubmit" value="Submit" class="btnSubmit" /></div>
    <div id="progress-div"><div id="progress-bar"></div></div>
</form>
<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script>
$(document).ready(function() { 
    $('#uploadForm').submit(function(e) {	
        if($('#userImage').val()) {
            e.preventDefault();

            $(this).ajaxSubmit({ 

                beforeSubmit: function() {

                    $("#progress-bar").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){

                    $("#progress-bar").width(percentComplete + '%');
                    $("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
                },
                success:function (result){
                    
                    alert (result);
                },
                resetForm: true 
            }); 
            return false; 
        }
    });
});
</script>
</body>
</html>
