<?php include_once("header.php"); ?>

<style>
        body {
            max-width: 1180px;
            width: 98%;
            margin: 0px auto;
            text-align: left;
        }
</style>

<body>
  <form action="Login_process.php" method="post">
    <div class ="login">
      <h2>Login</h2>
      <p>Email:
        <br>
        <input type="text" name="Email" required></p>
      <p>Password:
        <br>
        <input type="text" name="Password" required></p>
        <button type="submit" class="loginbtn">Login</button>
    </div>
  </form>
</body>

<?php include_once("footer.php"); ?>