<?php
setcookie("name","Orchid",time()+1*24*3600,"/","",0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>
<body>
    <?php
    if(!count($_COOKIE)>0){
        
    }
    echo $_COOKIE['name'];
    ?>
</body>
</html>