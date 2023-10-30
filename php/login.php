<?php
session_start();
include 'db_con.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
  function validation($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}

$uname = validation($_POST['username']);
$pass = validation($_POST['password']);

$sql = "SELECT * FROM login WHERE username = '$uname' AND password='$pass'";
$result = $con->query($sql);

if (mysqli_num_rows($result) === 1) {
  $row = mysqli_fetch_assoc($result);
  if ($row['username'] === $uname && $row['password'] === $pass) {
    echo "Logged In";
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    header("Location: ../html/header.html");
    exit();
  } 
  else{
    header("Location: index.php?error=Incorrect User Name and Password");
    exit();
  }
} 
else {
  header("Location:index.php");
  exit();
}