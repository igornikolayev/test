<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header id="header" class="header">
		<div class="container">
			<div class="main_header">
				<nav class=" navbar navbar-expand-lg navbar-light gggg">
					<a class="navbar-brand registration" href="#">Registration</a>
					<div class=" navbar-collapse " id="navbarSupportedContent">
						<ul class="navbar-nav  list">
							<li class="nav-item active" >
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="listUsers.php">List of users</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>

		</div>
	</header>
	<section id="main" class="main">
		<div class="container">
			<div class="main_content">
				<div class="describe">
					<h1>Welcom </h1>
				</div>
				<div class="form">
					<form method="POST" action=" <?php require "log_in.php";?>" >
						<div class="form-group">
							<label for="inputEmail">Your login</label>
							<input type="login" class="form-control" id="inputLogin" placeholder="Enter your login" name="loginUser"  value="<?php echo @$data['loginUser']; ?>">
						</div>
						<div class="form-group">
							<label for="inputEmail">Your password</label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="passUser" value="<?php echo @$data['passUser']; ?>">
						</div>
						<button type="submit" class="btn btn-primary" name="log_in">Log In</button>
						<button type="submit" class="btn btn-primary" name="sign_up">Sign Up</button>
					</form>
					<p class="error">
												<?php
if (!empty($errors)) {
	echo array_shift($errors);
}
?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer" class="footer">
		<div class="container">
			<div class="rights">
				<h1>Developed by Igor Nikolayev</h1>
			</div>
		</div>
	</footer>
</body>
</html>