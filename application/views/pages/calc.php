<h1>Calculator</h1>

<form>
	<select name="type" id="type" onchange="calcprice()">
		<option value="econ">Economy car</option>
		<option value="stdc">Standard car</option>
		<option value="suvw">SUV/Wagon</option>
		<option value="wvan">Van</option>
		<option value="prem">Premium car</option>
	</select>
	<p>Booking date: </p>
	<p>Return date: </p>

	<p id="total"></p>
</form>

<script type="text/javascript">
	function calcprice() {
		var type = document.getElementByID("type");

		switch type:
			case econ:
				break;
			case stdc:
				break;
			case suvw:
				break;
			case wvan:
				break;
			case prem:
				break;
	}
</script>