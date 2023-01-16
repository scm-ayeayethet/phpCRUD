<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/common.css">
  <style>
    .container {
      width: 35%;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  include './database/connectDB.php';
  $id = $_GET['id'];
  $getQry = "SELECT * FROM users WHERE id='$id'";
  $result = mysqli_query($conn, $getQry);
  $data = mysqli_fetch_assoc($result);

  ?>
  <div class="container">
    <h2>Edit Form</h2>
    <form action="edit.php?id=<?php echo $data['id']; ?>" method="post" class="form">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="editName" class="form-control" value="<?php echo $data['name'] ?>">
        <span class="text-danger"><?php if (isset($_SESSION['editNameErr'])) echo $_SESSION['editNameErr']; ?></span>
      </div>
      <button type="submit" class="btn btn-primary mt-3" name="editBtn">Edit</button>
    </form>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>