<?php include_once("header.php"); ?>

<body>
  <form action="login.php" method="post">
    <div class ="login">
      <h2>Login</h2>
      <p>Email:
        <br>
        <input type="text" name="email" required></p>
      <p>Password:
        <br>
        <input type="text" name="password" required></p>
        <button type="submit" class="loginbtn">Login</button>
    </div>
  </form>
</body>
<?php include_once("footer.php"); ?>
