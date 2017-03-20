<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "midterm_1531";

$conn = mysqli_connect($host,
                       $user, 
                       $pass,
                       $db_name);
if($conn) {
    echo "connected";
} else {
    echo "not connected";
}
?>