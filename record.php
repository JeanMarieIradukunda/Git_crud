<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Insert Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CRUD Operations</a>
  </nav>

  <div class="container">
    <h1 class="mt-5">Insert Form</h1>
    <form action="insert.php" method="POST">
      <div class="form-group">
        <label for="fname">FirstName:</label>
        <input type="text" class="form-control" id="name" name="fname" required>
      </div>
      <div class="form-group">
        <label for="email">Lastname:</label>
        <input type="text" class="form-control" id="lname" name="lname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

