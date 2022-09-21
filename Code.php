<?php 
$employees = [
    'Mary'  => [
        'age' => 25,
        'gender' => 'Female',
    ],
    'Sarah'  => [
        'age' => 18,
        'gender' => 'Female',
    ],
    'Moosa'  => [
        'age' => 28,
        'gender' => 'Male',
   ],
// here you can add another employee like the structure above
];

echo 'Age: ' . $employees['Sarah']['age'] . "\n";
echo 'Gender : ' . $employees['Sarah']['gender'] . "\n";

?>
