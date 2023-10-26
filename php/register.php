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
				<form action="php/register.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" >Sign up</button>
                    <div class="container signin">
                        <p>Already have an account? <a href="../index.php">Sign in</a>.</p>
                      </div>
				</form>
			</div>
	</div>
</body>
</html>