<?php
date_default_timezone_set("Asia/Kathmandu");
echo "The time is ".date("h:i:sa")."<br>";

$date1 = date('2001-09-27');
$date2 = date('y-m-d');
$diff = abs(strtotime($date2)-strtotime($date1));
echo "Difference is: ".$diff."<br>";

$years = ceil($diff/(365*60*60*24));
echo "Difference in Years is: ".$years."<br>";

$months = floor(($diff - $years *365*60*60*24)/(30*60*60*24));
echo "Difference in months is: ".$months."<br>";

$days = floor(($diff-$years*365*60*60*24-$months*30*24*60*60)/(60*60*24));
echo "Difference in days is: ".$days."<br>";

echo $years.$months.$days."<br>";

echo "&copy; NextGen - ".date('Y');
?>