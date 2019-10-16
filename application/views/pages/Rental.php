<body>
	<h2>Rental Infomation</h2>
	<div class="container">
			
			<table border="1" align="center" class = "table">
    	<tr>
        	<th align="center" width="10%">Rental ID</th>
        	<th align="center" width="10%">User ID</th>
			<th align="center" width="10%">Location</th>
        	<th align="center" width="10%">Car ID</th>
        	<th align="center" width="10%">Start Date</th>
        	<th align="center" width="10%">End Date</th>
        	<th align="center" width="10%">Cost</th>
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

						$sql = "SELECT * FROM rental;";
						$result=mysqli_query($conn,$sql);

						$sql2 = "SELECT * FROM customers;";
						$result2=mysqli_query($conn,$sql);

						$sql3 = "SELECT * FROM cars;";
						$result3=mysqli_query($conn,$sql);

						$sql4 = "SELECT * FROM locations;";
						$result4=mysqli_query($conn,$sql);

						$sql5 = "SELECT * FROM rates;";
						$result5=mysqli_query($conn,$sql);

						while ($row = mysqli_fetch_assoc($result)){	
						?>
						<div class="rental">

							<?php
							echo "<tr>";
							echo "<td align='center'>".$row['rental_id']."</td>";
							echo "<td align='center'>".$row['customerID']."</td>";
							echo "<td align='center'>".$row['locationID']."</td>";
							echo "<td align='center'>".$row['carID']."</td>";
							echo "<td align='center'>".$row['start_date']."</td>";
							echo "<td align='center'>".$row['end_date']."</td>";
							echo "<td align='center'>".$row['cost']."</td>";
				?>
			</div>
<?php

			echo "</tr>";
		}
		mysqli_close($conn);
				     
?>
	</div>
	
</body>
