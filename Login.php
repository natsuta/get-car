<?php include_once("header.php"); ?>

<body>
  <form action="Login_process.php" method="post">
    <div class ="login">
      <h2>Login</h2>
      <p>Email:
        <br>
        <input type="email" name="Email" required maxlength="50"></p>
      <p>Password:
        <br>
        <input type="text" name="Password" required maxlength="50"></p>
        <button type="submit" class="loginbtn">Login</button>
    </div>
  </form>
</body>
<?php include_once("footer.php"); ?>