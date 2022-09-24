<?php
include_once("config.php");
if (!empty($_POST['password'])) {
  $password = $_POST['password'];
}else {
  header('location:index.php?err=Password is required');
}

if (!empty($_POST['age'])) {
  $age = $_POST['age'];
}else {
  header('location:index.php?err=Age is required');
}
if (!empty($_POST['email'])) {
  $email = $_POST['email'];
}else {
  header('location:index.php?err=Email is required');
}
if (!empty($_POST['full_name'])) {
  $name = $_POST['full_name'];
}else {
  header('location:index.php?err=Your name is required');
}
$id = $_POST['id'];
$query = mysqli_query($mysqli, "UPDATE users SET name='$name', email='$email', age='$age', password='$password' WHERE id='$id'");
header('location: index.php?success=User updated successfully');
?>
