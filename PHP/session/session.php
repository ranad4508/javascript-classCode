<?php
session_start();
$_SESSION['favcolor'] = 'Yellow';
$_SESSION['favanimal'] = 'Cat';
$_SESSION['favFood'] = 'Momo';

echo "Favourite color is ".$_SESSION['favcolor']."<br> favourite animal is ".$_SESSION['favanimal']."<br> favourite food is ".$_SESSION['favFood'];
?>