<?php

/*
- Write a program to find an Odd or Even number using function.
- This function should eccept a number to find odd or even.
- To find Odd/Even use if condition insde the function.
- To display the output call the function.
Hint - Use modulous operator

*/

function CheckEven($num1){
if($num1 % 2 == 0) {
        echo $num1. "  EVEN";
    }
    else {
        echo $num1. "  ODD";
    }
}
checkEven(33);
?>


