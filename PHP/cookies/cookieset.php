<?php
setcookie("name","shova", time()+1*24*60*60, "/", "",0);
echo $_COOKIE['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // if(!count($_COOKIE)>0){
        
    // }
    // $_COOKIE['name'];
    ?>
</body>
</html>