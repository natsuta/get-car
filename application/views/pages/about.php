Page under construction

<h1>Calculator</h1>

<form>
	<select name="type" id="type" onchange="calcprice()">
		<option value="econ">Economy car</option>
		<option value="stdc">Standard car</option>
		<option value="suvw">SUV/Wagon</option>
		<option value="wvan">Van</option>
		<option value="prem">Premium car</option>
	</select>

	<input type="radio" name="booking" value="hourly"> Hourly booking
	<input type="radio" name="booking" value="daily"> Daily booking

	<p>Booking date: </p>
	<p>Return date: </p>

	<p id="total"></p>
</form>

<script type="text/javascript">
	function calcprice() {
		var type = document.getElementByID("type");
		var hourrate;
		var dayrate;

		switch type:
			case econ:
				hourrate = 7;
				dayrate = 40;
				break;
			case stdc:
				hourrate = 8.5;
				dayrate = 50;
				break;
			case suvw:
				hourrate = 11;
				dayrate = 65;
				break;
			case wvan:
				hourrate = 13;
				dayrate = 72;
				break;
			case prem:
				hourrate = 15;
				dayrate = 88;
				break;
		

	}
</script>