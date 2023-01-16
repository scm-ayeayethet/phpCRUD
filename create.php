<?php 
session_start();
include "./database/connectDB.php";

if(isset($_POST['addBtn'])){

  if (empty($_POST["name"])) {
		$_SESSION['nameErr'] = "Name is required";		
	}

  $name = $_POST['name'];
 
  if(!empty($name)){
    $query = " INSERT INTO users(name) VALUES('$name')";
    mysqli_query($conn,$query);
    header('location: ./index.php');
  }else{
    header('location: ./create_form.php');
  }
}