<?php
// Input date and time description
$dateString = "next Monday";

// Get the Unix timestamp from the input description
$timestamp = strtotime($dateString);
$date = date('Y-m-d H:i:s', $timestamp);
echo "Date is :".$date;

?>
