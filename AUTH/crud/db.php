<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connection = mysqli_connect($server, $username, $password, $db_name);

if (!$connection) {
    echo "Error: " . mysqli_connect_error();
} 
?>
