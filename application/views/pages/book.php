<style>

.booking {
	margin: auto;
	font-family: Arial, Helvetica, sans-serif;
	display: block;
	padding: 14px 25px;
	font-size: 15px;
}

</style>

<script type="text/javascript">
	//Code acknowledgement: https://www.w3schools.com/php/php_ajax_database.asp
	function showCars(str) {
	if (str=="") {
		document.getElementById("carmodule").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		document.getElementById("carmodule").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","getcars?q="+str,true);
	xmlhttp.send();
	}
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "getcar123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
else {
?>
  
  <body>
    <form action="booking_process" method="post">
      <div class ="booking">
        <h2>Book Now</h2>
		
		<p>Select Location:
        	<br>
			<?php
				$sql = "select * from locations";
				$result = $conn->query($sql);
			?>
			<select name="location" onchange="showCars(this.value)">
				<option value="">Select a location...</option>
				<?php
					while($row=mysqli_fetch_array($result)){
						echo "<option value='$row[location_id]'>$row[location_address]</option>";
					}
				?>
			</select>
		  </p>
		<p>Select Car:
			<br>
			<!-- Car module, field name is "car" -->
			<div id="carmodule">
				<p>Please note that the header and footer will appear again when you select a location, that is unfortunately how CodeIgniter works and I can't do anything about it</p>
			</div>
			</p>
        <p>Pickup Date:
          <br>
          <input type="date" name="pickupdate">
		  </p>
		<p>Pickup Time:
          <br>
          <input type="time" name="pickuptime">
		  </p>
        <p>Return Date:
          <br>
          <input type="date" name="returndate">
		  </p>
		<p>Return Time:
          <br>
          <input type="time" name="returntime">
		  </p>
			<br>
        <button type="submit" class="bookbtn" name="Book">Confirm</button>
		
      </div>
    </form>
  </body>
<?php
}
?>