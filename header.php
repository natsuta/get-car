<?php 
	session_start();
   
?>   

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="wireframe.css">
	<img class="logo" src="logo.png" max-width="100%"/>
	<nav class="topnav" id="mytopnav">
		<a href="index.php">Home</a>
		<a href="menu.php">About Us</a>
		<a href="order.php">How to Use</a>
		<a href="cart.php">Pricing</a>
		<a href="queue.php">Locations and Cars</a>
		<a href="javascript:void(0);" class="icon" onclick="openmenu()">
		<i class="fa fa-bars"></i>
		</a>
	</nav>
	<div class="login">
		<?php 
			if(isset($_SESSION['user'])){
				echo "<a href='logout.php'>Logout</a>";
			}
			else {
				echo "<a href='register.php'>Register</a>";
				echo "<a href='login.php'>Login</a>";
			}
		?>
	</div>
	<script>
		function openmenu() {
			var x = document.getElementById("Topnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			}
			celse {
				x.className = "topnav";
			}
		}
	</script>
</head>