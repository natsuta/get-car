<?php
	if(!isset($_SESSION['username']) && !($_SESSION['username'] == "admin")) {
		echo "You do not have permission to access this page.";
		exit();
	}
?>
<body>
	<form action="staff_register_process" method="post">
		<div class="registration">
		<h2>Staff Registration</h2>
		<p>First Name:
			<br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'')" name="FirstName" placeholder="Alphabet only" required maxlength="20"></p>
		<p>Last Name:
			<br>
			<input type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'')" name="LastName" placeholder="Alphabet only" required maxlength="20"></p>
		<p>Username:
			<br>
			<input type="username" name="Username" required maxlength="50"></p>
		<p>Password:
			<br>
			<input type="password" name="Password" required maxlength="50"></p>
		<p>Repeat Password:
			<br>
			<input type="password" name="RePassword" required maxlength="50"></p>

		<button type="submit" class="registerbtn" name="Register">Register</button>
		</div>
	</form>
</body>