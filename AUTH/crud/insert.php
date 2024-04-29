<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['names'];
    $uname = $_POST['uname'];

    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];

    if ($pwd1 == $pwd2) {

        // CREATING DB-CONNECTION
        $server = "localhost";
        $username = "root";
        $password = "";
        $db_name = "crud";

        $connection = mysqli_connect($server, $username, $password, $db_name);

        if (!$connection) {
            echo "Error: " . mysqli_connect_error();
        } else {
            // INSERTING DATA INTO DATABASE
            $insert = "INSERT INTO `users`(`id`, `names`, `username`, `passcode`) VALUES (NULL,'$names','$uname','$pwd1')";

            $inserted = mysqli_query($connection, $insert);

            if ($inserted) {
                $_SESSION['success'] = "Well Recorded!!";
                // Redirect back to insert.php
                header("Location: register.php");
                exit(); // Make sure to exit after redirection
            } else {
                $_SESSION['error'] = "Not Recorded" . mysqli_error($connection);
                header("Location: register.php");

            }
        }
    } else {
        $_SESSION['error'] = "Passwords do not match"; // Corrected error message
    }
}
?>
