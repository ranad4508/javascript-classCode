<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./Library/jquery.min.js"></script>
    <style>
        body{
            background-color: beige;
        }
        button{
            color:#fff;
            background-color: #873fcf;
            font-weight: bolder;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 10px;
            border: 1px red;
        }
        button:hover{
            color: #fff;
            background-color: purple;
            transition: 1.1s;

        }
    </style>
    <script>
        $(document).ready(function(){
            $(".div-hide").click(function(){
                $(".btn-hide").hide("fast");
                $(".btn-show").hide(1000);
            });
            $(".div-show").click(function(){
                $(".btn-hide").show(1000);
                $(".btn-show").show(5000);
            });
            $(".img-hide").click(function(){
                $("img").hide(50);
            });
            $(".img-show").click(function(){
                $("img").show(2000);
            });
        });
    </script>
</head>
<body>
    <div class="btn-hide">Hello Guys do you want to hide me?</div>
    <div class="btn-show">Hello Guys you are gonna show me if you click the button</div>
    <img src="./IMG-3dfe301d57e1381d43c317809c8193b5-V.jpg" alt="" height="400px" width="540px"><br>
    <button type="button" class="div-hide">Hide Div</button>
    <button type="button" class="div-show">Show Div</button>
    <button type="button" class="img-hide">Hide Image</button>
    <button type="button" class="img-show">Show Image</button>

</body>
</html>