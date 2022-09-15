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

echo "full name: $fullname\n";

/*
Display the age using string operator (.)
and arithamatic Subtaction operator

*/


$age = date('Y') - $birthyear;
echo 'age:'.$age;

?>