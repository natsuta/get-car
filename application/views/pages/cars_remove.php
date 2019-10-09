<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  table-layout: fixed;
  width: 100%;
}
</style>

<body>
	<h2 style="text-align: center;">Cars</h2>
	<div class="container">
		<table>
		<tr>
			<th>Car Name</th>
			<th>Registration</th>
			<th>Colour</th>
			<th>Car Type</th>
			<th>Hourly Rate</th>
			<th>Daily Rate</th>
			<th>Availability</th>
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

			$sql = "SELECT * FROM locations;";
			$result=mysqli_query($conn,$sql);

			$num_rows=mysqli_num_rows($result);

			$i=0;
			while ($row = mysqli_fetch_assoc($result)){
				$sql2 = "SELECT * FROM cars WHERE location_id = $row[location_id]";
				$result2=mysqli_query($conn,$sql2);

			?>
			<tr><th colspan="6"><?php echo $row['location_address']; ?></th></tr>
			<?php 
				while($row2 = mysqli_fetch_assoc($result2)){
					$sql3 = "SELECT * FROM rates WHERE carTypeID = $row2[carTypeID]";
					$result3=mysqli_query($conn,$sql3);
					$row3=mysqli_fetch_array($result3);
			?>
			<tr>
			<?php
					echo "<td>".$row2['carName']."</td>";
					echo "<td>".$row2['carRego']."</td>";
					echo "<td>".$row2['colour']."</td>";
					echo "<td>".$row3['carType']."</td>";
					echo "<td>$".$row3['hourlyrate']."</td>";
					echo "<td>$".$row3['dailyrate']."</td>";

					if ($row2['hired'] == 1)
						echo "<td>Hired</td>";
					else
						echo "<td>Available</td>";
		?>
		</tr>
	</div>
	<?php
				}
				$i++;
			}
		mysqli_close($conn);		     
	?>
		</table>
	</div>
	
</body>