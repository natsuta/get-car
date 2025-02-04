<?php 
	if(!isset($_SESSION)) { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- This is for Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Wireframe CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/wireframe.css"); ?>">

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<!-- Logo -->
		<a class="navbar-brand" href="<?php echo base_url(); ?>">
			<img src="<?php echo base_url("assets/imgs/logo.png"); ?>" style="width:100px;"/>
		</a>

		<!-- Toggler -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("about"); ?>">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("howto"); ?>">How to Use</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("cars"); ?>">Cars</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("locations"); ?>">Locations</a>
				</li>

			<?php 
				if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'Customer'){
					echo "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#'>Customer";
					echo "<span class='caret'></span></a>";
					echo "<ul class='dropdown-menu'>";
					echo "<li><a href=".base_url("book").">Book a car</a></li>";
					echo "<li><a href=".base_url("cust_rental").">View bookings</a></li>";
					echo "<li><a href=".base_url("profile").">Profile/Change details</a></li>";
					echo "</ul>";
					echo "</li>";
				}
				
				if(isset($_SESSION['usertype'])){
					echo "<li class='nav-item'>";
					echo "<a class='nav-link' href=".base_url("logout").">Logout</a>";
					echo "</li>";
				}
				else {
					echo "<li class='nav-item'>";
					echo "<a class='nav-link' href=".base_url("cust_register").">Register</a>";
					echo "</li>";
					echo "<li class='nav-item'>";
					echo "<a class='nav-link' href=".base_url("cust_login").">Login</a>";
					echo "</li>";
				}

				if(isset($_SESSION['username'])) {
					echo "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#'>Staff";
					echo "<span class='caret'></span></a>";
					echo "<ul class='dropdown-menu'>";
					echo "<li><a href=".base_url("rental").">View rentals</a></li>";
					echo "<li><a href=".base_url("cars_add").">Add cars</a></li>";
					echo "<li><a href=".base_url("cars_remove").">View and remove cars</a></li>";
					echo "</ul>";
					echo "</li>";
				}
				
				if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
					echo "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#'>Admin";
					echo "<span class='caret'></span></a>";
					echo "<ul class='dropdown-menu'>";
					echo "<li><a href=".base_url("staff_register").">Add staff</a></li>";
					echo "<li><a href=".base_url("staff_remove").">View and remove staff</a></li>";
					echo "<li><a href=".base_url("user_list").">View users</a></li>";
					echo "</ul>";
					echo "</li>";
				}
			?>
			</ul>
		</div>
	</nav>

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		$(function(){
			$('a').each(function(){
				if ($(this).prop('href') == window.location.href) {
					$(this).addClass('active'); $(this).parents('li').addClass('active');
				}
			});
		});
	</script>

</head>
