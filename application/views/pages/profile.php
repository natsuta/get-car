<style>
	.row{
		height:200px;
		width: 400px;
	}
</style>

<body>

    <div class="row">
  <h3>Change email address</h3>
        <form action="updateEmail.php" method="POST">
            <div class="col-md-6">
               <p>Please input new email address:
            <br>
            <input type="text" name="Email" required maxlength="50"></p>

            <p>Please input password:
            <br>
            <input type="password" name="Password" required maxlength="50"></p>
            </div>
            <div class="col-md-6">
                <button type="submit" class="updatebtn">Update</button>
            </div>
        </form>
    </div>
   
<div class="row">
  <h3>Change phone number</h3>
        <form action="updateMobile.php" method="POST">
            <div class="col-md-6">
               <p>Please input mobile phone:
            <br>
            <input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" name="Mobile" placeholder="Number only" required maxlength="11"></p>

            <p>Please input password:
            <br>
            <input type="password" name="Password" required maxlength="50"></p>
            </div>
            <div class="col-md-6">
                <button type="submit" class="updatebtn">Update</button>
            </div>
        </form>
    </div>

    
<div class="row">
    <h3>Change password</h3>
        <form action="updatePassword.php" method="POST">
            <div class="col-md-6">
               <p>Please input old password:
            <br>
            <input type="password" name="Password" required maxlength="50"></p>

            <p>Please input new password:
            <br>
            <input type="password" name="NewPassword" required maxlength="50"></p>

            </div>
            <div class="col-md-6">
                <button type="submit" class="updatebtn">Update</button>
            </div>
        </form>
    </div>
    
</body>
</html>