<?php

// Creating database Connection
$server = 'localhost';
$username = 'root';
$pwd = "";
$dbname = "crud_demo";

$conn = mysqli_connect($server, $username, $pwd, $dbname);

// Checking Connection

if (!$conn) {
    echo "Connection Failed: ". mysqli_connect_error($conn);
}

// Selectinf data From database
$select = "SELECT * FROM `users`";

$results = mysqli_query($conn, $select);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "Names". $row['fname']."-".$row['lname'] ."<br>";
        echo "Email". $row['email']."<br>";
    }
}else{
    
    echo "No Recor found";
}

?>