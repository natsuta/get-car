<?php include_once("header.php"); ?>
  <body>
    <form action="register.php" method="post">
      <div class ="registration">
        <h2>Register</h2>
        <p>Email:
          <br>
          <input type="text" name="email" required></p>
        <p>Password:
          <br>
          <input type="text" name="password" required></p>
        <p>Repeat Password:
          <br>
          <input type="text" name="repassword" required></p>

        <button type="submit" class="registerbtn">Register</button>
      </div>
    </form>

    <div class="container signin">
      <p>Already have an account?<a href="login.php">Sign in</a></p>
    </div>
  </body>
<?php include_once("footer.php"); ?>
