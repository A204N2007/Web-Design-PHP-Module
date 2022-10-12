<?php
    // Create an array of two students using multidimensional array.
    $students = [
        'Student 1' =>
        [
            'age' => 12,
            'group' => 'C',
            'cource' => 'Web Design'
        ],
        'Student 2' =>
        [
            'age' => 19,
            'group' => 'A',
            'cource' => 'Web Design'
        
        ],
    ];
        foreach($students as $student) {
            echo 'Age: '. ['age']. '\t' . 'Group: '. $student['group']. 'Cource: '. $student['cource']. '\n';
        }


?>