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
								<a class="nav-link" href="#">List of users</a>
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
				<div class="describe_information">
					<h1>
						List of users  
					</h1>
				</div>
				<div class="out_information">
					<p>
						<?php 
							require 'search_user.php';
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