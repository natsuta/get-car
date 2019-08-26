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

	<div class="logocontainer"><img class="logo" src="logo.png"/></div>
	<div class="topnav" id="mytopnav">
		<a href="index.php">Home</a>
		<a href="menu.php">About Us</a>
		<a href="order.php">How to Use</a>
		<a href="cart.php">Pricing</a>
		<a href="queue.php">Locations and Cars</a>
		<a href="javascript:void(0);" class="icon" onclick="openmenu()">
			<i class="fa fa-bars"></i>
		</a>
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
			var x = document.getElementById("mytopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			}
			else {
				x.className = "topnav";
			}
		}
	</script>
</head>