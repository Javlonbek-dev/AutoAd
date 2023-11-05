<?php
session_start();
include('db_con.php');
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login`(`id`, `username`, `email`,`password`)
    VALUES (NULL,'$username','$email','$password')";


    $sql="INSERT INTO `login` (`id`, `username`, `email`, `password`) 
    VALUES (NULL, '$username', '$email', '$password')";
    $result = $con->query($sql);

    if ($result) {
        header("Location: ../html/header.html");
    } else {
        echo "Failed: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
    <link rel="stylesheet" href="../css/register.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="submit" >Sign up</button>
                    <div class="container signin">
                        <p>Already have an account? <a href="../index.php">Sign in</a></p>
                      </div>
				</form>
			</div>
	</div>
</body>
</html>