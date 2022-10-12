<?php
    declare(strict_types=1);

/*
- Write a program to add sum of three numbers using function
- A function should have three paremeters.
- A function should return sum of three numbers.
- A function should call with three arguments.

*/

function addThreeNumber(int  $number1, int $number2, int $number3 ){
    return $number1 + $number2 + $number3;
} 

echo addThreeNumber (6, 8, 10,);

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


