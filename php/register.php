<?php
session_start();
include('db_con.php');
if (isset($_POST["submit"])) {
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `login`(`id`, `username`, `email`,`password`)
    VALUES (NULL,'$username','$email','$password')";

    $result = $con->query($sql);

    if ($result) {
        header("Location: ../html/header.html?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
