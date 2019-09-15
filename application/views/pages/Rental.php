<body>
	<h2>Rental Infomation</h2>
	<div class="container">
			
			<table border="1" align="center" class = "table">
    	<tr>
        	<th align="center" width="10%">Rental ID</th>
        	<th align="center" width="10%">User ID</th>
        	<th align="center" width="10%">Car ID</th>
        	<th align="center" width="10%">Start Date</th>
        	<th align="center" width="10%">End Date</th>
        	<th align="center" width="10%">Pick  Up Location</th>
        	<th align="center" width="10%">Drop Off Location</th>
    	</tr>

				<?php
					
					$servername = "127.0.0.1";
					$username = "root";
					$password = "123456";
					$dbname = "getcar";

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					if (mysqli_connect_errno()){
  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
  					}

						$sql = "SELECT * FROM rental;";
						$result=mysqli_query($conn,$sql);

						$num_rows=mysqli_num_rows($result);

						$i=0;
						while ($row = mysqli_fetch_assoc($result)){	
						?>
						<div class="rental">

							<?php
							echo "<tr>";
							echo "<td align='center'>".$row['rental_id']."</td>";
							echo "<td align='center'>".$row['userid']."</td>";
							echo "<td align='center'>".$row['carsid']."</td>";
							echo "<td align='center'>".$row['start_date']."</td>";
							echo "<td align='center'>".$row['end_date']."</td>";
							echo "<td align='center'>".$row['pickup_location']."</td>";
							echo "<td align='center'>".$row['dropoff_location']."</td>";
				?>
			</div>
<?php

			echo "</tr>";
			$i++;
		}
		mysqli_close($conn);
				     
?>
	</div>
	
</body>
