<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Buttons</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark p-4 d-flex justify-content-between">
    <a class="navbar-brand" href="#">CRUD Operations</a>
    <a href="login.php"><button class="btn btn-outline-light">Login</button></a>
</nav>
<div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create</h5>
                        <p class="card-text">Add a new record</p>
                        <a href="record.php" class="btn btn-success">Create</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Read</h5>
                        <p class="card-text">View existing records</p>
                        <a href="read.php" class="btn btn-primary">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- Bootstrap JS (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
