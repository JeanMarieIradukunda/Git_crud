<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark p-4 d-flex justify-contente-between">
        <a class="navbar-brand" href="#">CRUD Operations</a>
        <button class="btn btn-outline-light">Login</button>
    </nav>

    <div class="container bg-secondary mt-5 w-50 d-flex justify-content-center flex-column align-items-center">
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="" method="post">
                <label for="" class="font-bold text-info  mt-3">Username: </label>
                <input type="text" name="username" id="" class="form-group text-center" placeholder="Enter Username"> <br>

                <label for="" class="font-bold text-info  mt-3">Password: </label>
                <input type="password" name="password" id="" class="form-group text-center" placeholder="Enter Password"> <br>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</div>

<!-- Php LOGIN CODES -->
<?php

session_start();
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

// Checking if form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve username and password from the form
    $uname = $_POST['username'];
    $paswd = $_POST['password'];


    // sql to select and check if the user found in the DB
    $select = "SELECT * FROM `admins` WHERE `username` = '$uname' AND `passcode` = '$paswd'";
    $selected = $conn->query($select);

    if ($selected->num_rows == 1) {
        header("Location: index.php");
    }else {
        $_SESSION['error'] = "User nor Found!!!";
    }
}
?>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>