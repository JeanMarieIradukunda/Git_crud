<?php
session_start();

$uname = "admin";
$pwd = 123;

$server = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connection = mysqli_connect($server, $username, $password, $db_name);

if (!$connection) {
    echo "Error: " . mysqli_connect_error();
} 

// Starting Session
if(isset($_SESSION['uname'])){
    echo "Welcome ". $_SESSION['uname'];
}else{
    if ($_POST['uname'] == $uname && $_POST['pwd'] == $pwd) {
        $_SESSION['uname'] = $uname;
        header("Location: welcome.php");
    }else {
        $_SESSION['error'] = "Invalid User Credentials";
        header("Location: index.php");   
    }
}
?>