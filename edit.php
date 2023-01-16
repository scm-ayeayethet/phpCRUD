<?php

include './database/connectDB.php';

$id = $_GET['id'];

if (isset($_POST['editBtn'])) {

  if (empty($_POST["editName"])) {
    $_SESSION['editNameErr'] = "Name is required";
  }

  $editName = $_POST['editName'];

  if (!empty($editName)) {
    $updateQry = "UPDATE users SET name='$editName' WHERE id='$id'";
    mysqli_query($conn, $updateQry);
    header('location: ./index.php');
  }else{
    header('location: ./edit_form.php?id={$id}');
  }
}
