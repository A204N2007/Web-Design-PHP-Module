<?php
$class= '10S3 ' ;
$marks= 94 ;
$name=' Ahmed';
$grade= null;


if( $marks> 86 && $marks <= 100 ){ 
    $grade= 'A';
}
elseif ($marks <= 85 && $marks >= 65 ){
    $grade-='B'; 
}
elseif ($marks <=64 && $marks >=55){
    $grade='C'; }
else {
    $grade- 'FAIL'; }
    

echo"NAME: $name \n ";

echo"Class: $class \n "; 

echo"GRADE: $grade \n ";

?>
