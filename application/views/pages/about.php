Page under construction

<h1>Calculator</h1>

<form>
	<select name="type" id="type" onchange="calcprice()">
		<option value="econ">Economy car</option>
		<option value="stdc">Standard car</option>
		<option value="suvw">SUV/Wagon</option>
		<option value="wvan">Van</option>
		<option value="prem">Premium car</option>
	</select><br/>

	<input type="radio" name="booking" id="hourly"> Hourly booking<br/>
	<input type="radio" name="booking" id="daily"> Daily booking

	<div id="hourcalc" style="display:none">
		Hours: <input id="hours" type="number" min="1" max="6">
	</div>

	<div id="daycalc" style="display:none">
		Days: <input id="days" type="number" min="1" max="5">
	</div>

	<p id="total"></p>
</form>

<script type="text/javascript">
	document.getElementById("hourly").addEventListener("click", display());
	document.getElementById("daily").addEventListener("click", display());
	
	function display() {
		if (document.getElementById("hourly").checked) {
			document.getElementById("hourcalc").style.display = 'block';
			document.getElementById("daycalc").style.display = 'none';
		}

		else {
			document.getElementById("hourcalc").style.display = 'none';
			document.getElementById("daycalc").style.display = 'block';
		}
	}

	function calcprice() {
		var type = document.getElementById("type");
		var hourrate;
		var dayrate;

		switch (type){
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
	}
</script>