<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/common.css">
</head>

<body>
  <div class="wrapper mt-5 ms-5 py-3  ">
    <a href="create_form.php" class="create" data-toggle="modal">
      <button type="button" class="btn btn-primary mb-3">Create</button>
    </a>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tilte</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include './database/connectDB.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        $rowCount = mysqli_num_rows($result);

        while ($data = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
           <td>{$data['id']}</td>
           <td>{$data['name']}</td>
           <td>
           <a href='edit_form.php?id={$data['id']}' class='edit' data-toggle='modal'>
              <button type='button' class='btn btn-success'>Edit</button>
            </a>
            <a href='delete.php?id={$data['id']}' class='delete' data-toggle='modal'>
              <button type='button' class='btn btn-danger'>Delete</button>
            </a>
          </td>
        </tr>
          ";
        }
        ?>

      </tbody>
    </table>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>