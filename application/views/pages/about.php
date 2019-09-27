<style>
	body, html {
		height: 100%;
		margin: 0;
	}

	.hero-image {
		background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets/imgs/aboutusbanner.jpg");
		height: 50%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
	}

	.hero-text {
		text-align: center;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: white;
	}

	.hero-text button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 10px 25px;
		color: black;
		background-color: #ddd;
		text-align: center;
		cursor: pointer;
	}

	.hero-text button:hover {
		background-color: #555;
		color: white;
	}

</style>

<body>

	<div class="hero-image">
		<div class="hero-text">
			<h1 style="font-size:50px">About Us</h1>
			<p>GetCar is Australia’s first and largest professional car sharing service and operates in Melbourne.</p>
			<button type="button" onclick="alert('Email: support@getcar.com.au')">Contact Us</button>
		</div>
	</div>

	<div class="content">
		<center>
			<br>
			<h2>Live a more active and convienient life</h2>
			<p>
			GetCar’s aim is to provide a reliable, convenient and affordable transport service that:
			<br>
			<p>✔ Allows people to live car-free
			<br>
			✔ Decreases car usage around Melbourne
			<br>
			✔ Improves local air quality
			<br>
			✔ Increases patronage for public transport
			<br>
			✔ Allows people to lead more active and efficient lives</p>
			<h2>Foundation and vision</h2>
			<p>
			GetCar is parterned with Melbourne City Council, formed to bring car sharing services to Australia. Founded in 2019 by director Ameer Albahem, the company has developed a range of business and IT systems that enable the delivery of consulting, technical services and the provision of on-the-ground car share facilities. Feel free to contact us today if you’d like to know more about GetCar.
			<br>
			<h3>Contact Details</h3>
			<p>Phone: 9748 2255 <br> Email: support@getcar.com.au</p>
			<b>Want to see how it all works? Click <u><a href="howto">here</a></u>.</b>
			</p> 
		</center>
	</div>
	
	<div class="calculator">
		<h2>Calculator</h2>

		<form>
			<select name="type" id="type" onchange="javascript:calcprice();">
				<option value="econ">Economy car</option>
				<option value="stdc">Standard car</option>
				<option value="suvw">SUV/Wagon</option>
				<option value="wvan">Van</option>
				<option value="prem">Premium car</option>
			</select><br/>

			<input type="radio" onclick="javascript:display();" name="booking" id="hourly"> Hourly booking<br/>
			<input type="radio" onclick="javascript:display();" name="booking" id="daily"> Daily booking

			<div id="hourcalc" style="display:none">
				Hours: <input id="hours" type="number" min="1" max="6" onchange="javascript:calcprice();">
			</div>

			<div id="daycalc" style="display:none">
				Days: <input id="days" type="number" min="1" max="5" onchange="javascript:calcprice();">
			</div>

			<p id="total"></p>
		</form>
	</div>

	<script type="text/javascript">
		
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
			var type = document.getElementById("type").value;
			var hourrate;
			var dayrate;

			switch (type) {
				case "econ":
					hourrate = 7;
					dayrate = 40;
					break;
				case "stdc":
					hourrate = 8.5;
					dayrate = 50;
					break;
				case "suvw":
					hourrate = 11;
					dayrate = 65;
					break;
				case "wvan":
					hourrate = 13;
					dayrate = 72;
					break;
				case "prem":
					hourrate = 15;
					dayrate = 88;
					break;
			}

			if (document.getElementById("hourly").checked) {
				var hours = document.getElementById("hours").value;
				var total = hours * hourrate;
			}

			else {
				var days = document.getElementById("days").value;
				var total = days * dayrate;
			}
			document.getElementById("total").innerHTML = "Total: $" + total;
		}
	</script>

</body>