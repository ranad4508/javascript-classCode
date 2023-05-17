<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./Library/jquery.min.js"></script>
</head>
<body>
    <script>
        $.ajax('ajaxjquery.php', {
            success :function(data){
                alert('AJAX call was success');
                alert('Data from the server ' +data);
            },
            error:function(){
                alert('There was some error performing the ajax call');
            }
        });
    </script>
</body>
</html>