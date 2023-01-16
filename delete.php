<?php

include './database/connectDB.php';

$id = $_GET['id'];
 $query = "DELETE FROM users WHERE id=$id";
 $result = mysqli_query($conn,$query);
 if($result){
  header('location: ./index.php');
 }

