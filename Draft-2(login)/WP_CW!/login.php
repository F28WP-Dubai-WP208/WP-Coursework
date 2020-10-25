<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id = "car-picture">
		<div class="header">
			<h2>Login</h2>
		</div>
		<form method="post" action="login.php">

			<?php echo display_error(); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_btn">Login</button>
			</div>
			<div class="sign-up">
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
			</div>
		</form>
		
</body>
</section>
</html>
