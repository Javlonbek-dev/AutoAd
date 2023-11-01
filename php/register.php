<?php
session_start();
include('db_con.php');
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // $sql = "INSERT INTO `login`(`id`, `username`, `email`,`password`)
    // VALUES (NULL,'$username','$email','$password')";

    $sql="INSERT INTO `login` (`id`, `username`, `email`, `password`) 
    VALUES (NULL, '$username', '$email', '$password')";
    $result = $con->query($sql);

    if ($result) {
        header("Location: ../html/header.html");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
