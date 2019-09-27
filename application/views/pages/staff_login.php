<?php
	if(isset($_SESSION['username']) || isset ($_SESSION['email'])) {
		echo "You are already logged in.";
		exit();
	}
?>

<body>
  <form action="staff_login_process" method="post">
    <div class ="login">
      <h2>Staff Login</h2>
      <p>Username:
        <br>
        <input type="text" name="Username" required></p>
      <p>Password:
        <br>
        <input type="password" name="Password" required></p>
        <button type="submit" class="loginbtn">Login</button>
    </div>
  </form>
</body>