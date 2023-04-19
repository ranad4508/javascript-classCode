<?php
echo time();
echo "<br>";

$nextWeek = time() + (7*24*60*60);
echo "Next week time is: ".$nextWeek;
$nextMonth = time() + (30*24*60*60);
echo "<br>Next month: ".$nextMonth;

echo "<br>Next week: ".date('y-m-d',$nextWeek).'<br>';

echo '<br>Previous week:'.date('y-m-d',strtotime('-1 week'))."<br>";
echo '<br>Next month:'.date('y-m-d',strtotime('+1 month'))."<br>";
?>