<?php
include_once("config.php");
  $name = $_POST['full_name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $password = $_POST['password'];

if (!empty($name) && !empty($email) && !empty($age) && !empty($password)) {
  $query = mysqli_query($mysqli, "INSERT INTO users (name, email, age, password) VALUES('$name', '$email', '$age', '$password') ");
  header('location: index.php?success=User listed successfully');
}else {
    header('location:index.php?err=Please enter the fields carefully');
}

?>
