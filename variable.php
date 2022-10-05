<?php
/*
A place of Info

*/




$firstname = 'Ahmed'; // first name
$middlename = 'Azdan'; // middle name
$lastname = 'Adam';// last name
$birthyear = 2007;
/*
display the full name using variable place holder
*/

$fullname = "$firstname $middlename $lastname";

echo "<p>Full Name: $fullname</p>";

/*
Display the age using string operator (.)
and arithamatic Subtaction operator

*/


$age = date('Y') - $birthyear;
echo "<p>Age:  $age Years old</p>";

?>