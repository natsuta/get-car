<?php include_once("../header.php"); ?>

<body>
  <form action="login_process.php" method="post">
    <div class ="login">
      <h2>Staff Login</h2>
      <p>Email:
        <br>
        <input type="text" name="Username" required></p>
      <p>Password:
        <br>
        <input type="password" name="Password" required></p>
        <button type="submit" class="loginbtn">Login</button>
    </div>
  </form>
</body>
<?php include_once("../footer.php"); ?>