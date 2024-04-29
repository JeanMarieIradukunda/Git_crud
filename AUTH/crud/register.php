<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body style="background-color: skyblue;">
    <nav class="navbar navbar-dark bg-dark p-4 d-flex justify-content-between">
        <a href="" class="text-light">CRUD</a>
        <a href="../index.php">
            <button type="submit" class="btn-info rounded">Sign_in</button>
        </a>
    </nav>

    <div class="container rounded mt-5 w-50">
        <div class="card rounded-circle">
            <div class="header rounded d-flex justify-content-center bg-success text-light p-3">
                <h4>Create Account</h4>
            </div>

            <div class="form mt-3 ml-3 d-flex justify-content-center">
            <?php
// Display success message if it exists
if(isset($_SESSION['success'])) {
    echo "<p style='color:green;'>".$_SESSION['success']."</p>";
    // Remove the success message from session to prevent it from displaying again
    unset($_SESSION['success']);
}

// Display error message if it exists
if(isset($_SESSION['error'])) {
    echo "<p style='color:red;'>".$_SESSION['error']."</p>";
    // Remove the error message from session to prevent it from displaying again
    unset($_SESSION['error']);
}
?>

                <form action="insert.php" method="POST">
                    <tr>
                        <td>Names: </td><br>
                        <td><input type="text" name="names" class="text-center" required placeholder="Enter names"></td>
                    </tr>
                    <br><br>
                    <tr>
                        <td>Username: </td><br>
                        <td><input type="text" name="uname" class="text-center" required placeholder="Enter username"></td>
                    </tr>
                    <br><br>
                    <tr>
                        <td>Password: </td><br>
                        <td><input type="password" name="pwd1" class="text-center" required placeholder="Enter password"></td>
                    </tr>
                    <br><br>
                    <tr>
                        <td>Confirm-Password: </td><br>
                        <td><input type="password" name="pwd2" class="text-center" required class="text-center" placeholder="Confirm password"></td>
                    </tr>
                    <br><br>
                    <tr>
                        <td>

                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn-primary">Save</button>
                        </td>
                    </tr>
                    <br><br>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>