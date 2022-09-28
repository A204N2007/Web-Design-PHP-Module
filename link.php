<?php
    $name= $_GET['name'];
    $age= $_GET['age'];
    $group= $_GET['group'];

    echo '<p>Welcome,' . $name . '</p>';
    echo '<p>I am ' . $age . ' year old</p>';
    echo '<p>I am a student of group ' . $group . ' </p>';
?>