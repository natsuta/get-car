<?php
	if(!isset($_SESSION['username']) && !($_SESSION['username'] == "admin")) {
		echo "You do not have permission to access this page.";
		include_once("../footer.php"); 
		exit();
	}
?>

<body>
	<h2>Staff</h2>
	<div class="container">
	<table>
		<tr>
			<td>Staff ID</td>
			<td>Username</td>
			<td>First Name</td>
			<td>Last Name</td>
		</tr>

	<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "getcar123456";
		$dbname = "getcar";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

			$sql = "SELECT * FROM staff WHERE staffID > 1;";
			$result=mysqli_query($conn,$sql);

			$num_rows=mysqli_num_rows($result);

			while ($row = mysqli_fetch_assoc($result)){	
			?>
			<tr>
				<?php
				echo "<td>".$row['staffID']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['firstName']."</td>";
				echo "<td>".$row['lastName']."</td>";
				?>
				<td><button type="button" name="remove" value="<?php echo $row['staffID'] ?>" >Remove</button></td>
			</tr>
	<?php
	}
	mysqli_close($conn);
					
	?>
	</table>
	</div>
	
</body>