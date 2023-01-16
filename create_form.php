<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/common.css">
  <style>
    .container {
      width: 35%;
    }
  </style>
</head>

<body>
  <div class="container">
  <h2>Create Form</h2>
    <form action="create.php" method="post" class="form">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
        <span class="text-danger"><?php session_start();
                                  if (isset($_SESSION['nameErr'])) echo $_SESSION['nameErr']; ?></span>
      </div>
      <button type="submit" class="btn btn-primary mt-3" name="addBtn">Add</button>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>