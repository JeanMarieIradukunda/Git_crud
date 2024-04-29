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
        <a href="crud/register.php">
            <button type="submit" class="btn-info rounded">Register</button>
        </a>
    </nav>

    <div class="container-fluid mt-5 w-50 ">
        <div class="card">
            <div class="header d-flex justify-content-center bg-success text-light">
                <h4>Login Form</h4>
            </div> 

            <?php
                        // Check if error session variable is set and display alert message
                        if (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
                            // Remove error session variable
                            unset($_SESSION['error']);
                        }
                        ?>

            <div class="form mt-3 ml-3 d-flex justify-content-center">
            <form action="login.php" method="POST">
                <table>
                    <tr>
                        <td><b>Username: &nbsp;</b>
                            <input type="text" name="uname" id="" placeholder="enter username">
                        </td>
                    </tr>
                    
                    <tr>
                        <td><b>Password: &nbsp;&nbsp;</b>
                            <input type="password" name="pwd" id="" placeholder="enter password">
                        </td>
                        <td>
                            <button type="submit" class="btn-primary">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
</body>
</html>