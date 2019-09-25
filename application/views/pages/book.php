<style>

.booking {
	margin: auto;
	font-family: Arial, Helvetica, sans-serif;
	display: block;
	padding: 14px 25px;
	font-size: 15px;
}

</style>  
  
  <body>
    <form action="booking_process.php" method="post">
      <div class ="booking">
        <h2>Book Now</h2>
		
		<p>Select Pickup Location:
          <br>
          <select name="pickuplocation">
		  <option value="airport">Melbourne Airport</option>
		  <option value="central">Melbourne Central</option>
		  <option value="southbank">Southbank</option>
		  <option value="footscray">Footscray</option>
		  <option value="sunshine">Sunshine</option>
		  <option value="stkilda">St Kilda</option>
		  <option value="williamstown">Williamstown</option>
		  <option value="essendon">Essendon</option>
		  </select>
		  
		<p>Select Return Location:
          <br>
          <select name="returnlocation">
		  <option value="airport">Melbourne Airport</option>
		  <option value="central">Melbourne Central</option>
		  <option value="southbank">Southbank</option>
		  <option value="footscray">Footscray</option>
		  <option value="sunshine">Sunshine</option>
		  <option value="stkilda">St Kilda</option>
		  <option value="williamstown">Williamstown</option>
		  <option value="essendon">Essendon</option>
		  </select>
		  
        <p>Select Body Type:
          <br>
          <select name="bodytype">
		  <option value="sedan">Sedan</option>
		  <option value="hatch">Hatch</option>
		  <option value="coupe">Coupe</option>
		  <option value="suv">SUV</option>
		  </select>
		  
        <p>Select Vehicle:
          <br>
          <select name="car">
		  <option value="nissan1">Nissan Pulsar 2016</option>
		  <option value="nissan2">Nissan Patrol 2017</option>
		  <option value="honda1">Honda Civic 2015</option>
		  <option value="honda2">Honda Accord 2019</option>
		  </select>
		  
        <p>Pickup Date & Time:
          <br>
          <input type="date" name="pickupdate">
		  

        <p>Return Date & Time:
          <br>
          <input type="date" name="returndate">
	
			<br>
			<br>
			
        <button type="submit" class="bookbtn" name="Book">Confirm</button>
		
      </div>
    </form>

    <div class="container register">
      <p>Don't have a GetCar account?<a href="cust_register"> <b><u>Sign up</u></a>.</b></p>
    </div>
  </body>