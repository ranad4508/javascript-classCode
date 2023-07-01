<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* p{
            color: red;
        }
        body{
            background-color: beige;
        }
        button{
            color:#fff;
            background-color: #873fcf;
            padding: 10px;
            border: 1px red;
        }
        button:hover{
            color: #fff;
            background-color: purple;

        } */
    </style>
    <script src="./Library/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".hide-btn").click(function(){
                $("p.very-fast").hide("fast");
                // $("p.slow").hide(5000);
            });
            $(".show-btn").click(function(){
                $("p.very-fast").show(50);
                // $("p.slow").show(5000);
            });
        });
    </script>
</head>
<body>
    <button type="button" class="hide-btn">
        Hide paragraphs
    </button>
    <button type="button" class="show-btn">
        Show paragraphs
    </button>
    <p class="very-fast">This paragraph will show/hide with very fast speed.</p>
    <!-- <p class="slow">This paragraph will show/hide with slow speed.</p> -->
    
</body>
</html>