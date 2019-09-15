<?php include_once("../header.php"); 
	if(!isset($_SESSION['username']) && !($_SESSION['username'] == "admin")) {
		echo "You do not have permission to access this page.";
		include_once("../footer.php"); 
		exit();
	}
?>

<body>
	<h2>Cars</h2>
	<div class="container">
			
	<?php
		
		$servername = "127.0.0.1";
		$username = "root";
		$password = "123456";
		$dbname = "getcar";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

			$sql = "SELECT * FROM cars;";
			$result=mysqli_query($conn,$sql);

			$num_rows=mysqli_num_rows($result);

			$i=0;
			while ($row = mysqli_fetch_assoc($result)){	
			?>
			<div class="cars">

				<?php
				echo "<label>".$row['brand']."</label>"."<br>";
				echo "<label>".$row['model']."</label>"."<br>";
				echo "<label>".$row['hourly_price']."</label>"."<br>";
				echo "<label>".$row['daily_price']."</label>"."<br>";
	?>

			<button type="button" name="booking">Booking</button>
			</div>
	<?php

		echo "</tr>";
		$i++;
	}
	mysqli_close($conn);
					
	?>
	</div>
	
</body>

<?php include_once("../footer.php"); ?>