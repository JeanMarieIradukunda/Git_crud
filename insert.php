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

// INSERTING DATA INTO DATABASE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    // insert query
    $insert = "INSERT INTO `users` (fname, lname, email) VALUES ('$fname', '$lname', '$email')";

    // execute Query
    $execute = mysqli_query($conn,$insert);

    // check if data Inserted
    if (!$execute) {
        echo "Data failed to be inserted" . mysqli_error($conn);
    }else {
        echo "Recorded well !!!";
        header("Location: index.php");
    }
}
?>