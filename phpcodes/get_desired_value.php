<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Read the desired value from the file
$desiredValue = file_get_contents('desired_value.txt');

// Respond with the stored value
echo $desiredValue;
?>