<?php 
	session_start();
   
?>   

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="wireframe.css">
	<!-- This is for the menu icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- This is for Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<!-- Logo -->
		<a class="navbar-brand" href="index.php">
			<img src="logo.png" style="width:100px;"/>
		</a>

		<!-- Toggler -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="howto.php">How to Use</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="prices.php">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="cars.php">Locations and Cars</a>
				</li>

			<?php 
				if(isset($_SESSION['user'])){
					echo "<li class='nav-item'>";
					echo "<a class='nav-link' href='logout.php'>Logout</a>";
					echo "</li>";
				}
				else {
					echo "<li class='nav-item'>";
					echo "<a class='nav-link' href='register.php'>Register</a>";
					echo "</li>";
					echo "<li class='nav-item'>";
					echo "<a class='nav-link' href='login.php'>Login</a>";
					echo "</li>";
				}
			?>
			</ul>
		</div>
	</nav>
</head>