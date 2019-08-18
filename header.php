<?php 
	session_start();
   
?>   

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="wireframe.css">
	<div class="logo"><img src="logo.png" /></div>
	<div class="nav"><nav>
		<a href="index.php">Home</a>
		<a href="menu.php">About Us</a>
		<a href="order.php">How to Use</a>
		<a href="cart.php">Pricing</a>
		<a href="queue.php">Locations and Cars</a>
	</nav></div>
	<div class="login">
		<?php 
			if(isset($_SESSION['user'])){
				echo "<a href='logout.php'>Logout</a>";
			}
			else {
				echo "<a href='register.php'>Login</a>";
				echo "<a href='login.php'>Login</a>";
			}
		?>
	</div>

</head>