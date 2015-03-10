<?php

// Receive POST data
$u_name = $_POST['username'];
$u_dob = $_POST['dob'];

// Create a PHP Date Object from the user's date of birth
$dob = date_create($u_dob);

// Calculate the difference between today and the user's date of birth
$age_Calc = date_diff($dob, date_create())->format('%y years %m months and %d days');

// Get today's date
$date = (new DateTime())->format('jS \of F, Y');

// Echo the age and a welcome string with today's date
echo "Hi ".$u_name.", how are you doing ? Today is ".$date." and according to my calculations, you are ".$age_Calc." old!";


?>