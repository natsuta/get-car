<?php
	if(isset($_SESSION['username']) || isset ($_SESSION['email'])) {
		echo "You are already logged in.";
		exit();
	}
?>

<body>
	<form action="cust_register_process" method="post">
		<div class ="registration">
		<h2>Register</h2>
		<p>First Name:
			<br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'')" name="FirstName" placeholder="Alphabet only" required maxlength="20"></p>
		<p>Last Name:
			<br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'')" name="LastName" placeholder="Alphabet only" required maxlength="20"></p>
		<p>Mobile Phone:
			<br>
			<input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" name="Mobile" placeholder="Number only" required maxlength="11"></p>
		<p>Email:
			<br>
			<input type="text" name="Email" required maxlength="50"></p>
		<p>Password:
			<br>
			<input type="password" name="Password" required maxlength="50"></p>

		<p>Repeat Password:
			<br>
			<input type="password" name="RePassword" required maxlength="50"></p>

		<button type="submit" class="registerbtn" name="Register">Register</button>
		</div>
	</form>

	<div class="container signin">
		<p>Already have an account? <a href="login.php">Sign in</a></p>
	</div>
</body>
