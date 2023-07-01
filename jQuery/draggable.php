<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./Library/jquery.min.js"></script>
    <link rel="stylesheet" href="./jquery-ui-1.13.2.custom/jquery-ui.min.css">
    <script src="./jquery-ui-1.13.2.custom/jquery-ui.min.js"></script>
        
    <style>
        #draggable{
            width: 150px;
            height: 150px;
            padding: 0.5em;
        }
    </style>
    <script>
        $(function(){
            $("#draggable").draggable();
        });
    </script>
</head>

<body>
    <div id="draggable" class="ui-widget-content">
        <p>Drag me around</p>
    </div>

</body>

</html>