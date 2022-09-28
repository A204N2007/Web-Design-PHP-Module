<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin') {
    echo'<p> Login Success! </p>';
}
else  {
echo'<p> Login failed! </p>';
}
echo '<p>Username:'. $username . '</p>';
echo '<p>Password:'. $password . '</p>';

?>