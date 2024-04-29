<?php
// session_start();
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
        <a href="logout.php"><button class="btn-warning text-ligth rounded">Exit</button></a>
    </nav>
    <div class="header d-flex justify-content-center text-light mt-5">
            <h4>Welcome Dear - <?php
                                session_start();
                                echo $_SESSION['uname'];
                                ?>
            </h4>
        </div>
    <div class="container-fluid w-75 mt-5">



        <div class="card">
<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connection = mysqli_connect($server, $username, $password, $db_name);

if (!$connection) {
    echo "Error: " . mysqli_connect_error();
}

// Select data from database 
$select = "SELECT * FROM `users`";
$results = mysqli_query($connection, $select);

// Checking if $results is not null
if ($results) {
    // Checking the number of rows returned
    if (mysqli_num_rows($results) > 0) {
        ?>
        <h2>User Data</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Names</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through each row and display data
                while ($row = mysqli_fetch_assoc($results)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['names']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "No data found.";
    }
} else {
    echo "Query execution failed.";
}

// Close database connection
mysqli_close($connection);
?>
