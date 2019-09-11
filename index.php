<?php include_once("header.php"); ?>

<style>
body, html {
  height: 100%;
  margin: 0;
}

.hero-image {
	background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("getcarbanner.jpg");
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
    <h1 style="font-size:50px">Welcome to GetCar</h1>
    <p>Sign up now to use our services!</p>
    <button onclick="window.location.href = 'customer/register.php';">Register</button>
  </div>
</div>

<div class="content">
<center>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices lorem eget ligula dictum auctor. Aliquam purus lorem, viverra vitae lorem non, sollicitudin malesuada augue. Integer consectetur ante sit amet est dignissim porttitor. Nam massa nulla, finibus scelerisque molestie nec, hendrerit in lacus. Ut aliquet mi nec risus scelerisque, quis mattis tortor scelerisque. Aenean sagittis cursus nibh vel efficitur. Donec id eros consequat ex vestibulum tempus ut vitae ex. Etiam non laoreet magna. Suspendisse vel ultrices tellus. Aliquam nec velit malesuada, elementum eros in, lacinia dui. Pellentesque sit amet lacinia sapien. Sed lobortis volutpat est at pulvinar.
<br>
<br>
Morbi tincidunt purus vehicula molestie cursus. Ut scelerisque tincidunt viverra. Curabitur efficitur nec dolor quis iaculis. Quisque aliquam maximus diam, non facilisis tortor iaculis at. Ut blandit accumsan tellus, non rhoncus tellus placerat ac. Suspendisse bibendum imperdiet leo eget ornare. Nulla luctus cursus urna. Fusce tempor dolor velit, non pulvinar odio mattis in. Curabitur aliquet enim eros, a lacinia mauris interdum at. Nunc et libero vitae justo luctus euismod. Suspendisse posuere est quis urna maximus vehicula. Nunc id hendrerit metus.
<br>
<br>
Phasellus placerat venenatis placerat. Donec bibendum massa magna, ac lobortis mauris pellentesque eu. Nulla at dapibus orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vel metus eu mauris pellentesque dictum. Pellentesque nec ornare orci, non tincidunt velit. Phasellus vel vehicula augue. Cras tristique egestas ligula. Suspendisse feugiat, purus at tincidunt aliquet, lectus nunc tincidunt elit, id mattis magna neque vel tortor. Integer faucibus lacinia condimentum. Vestibulum imperdiet risus et tortor placerat, sit amet dictum erat cursus. Vestibulum malesuada vulputate ante sed sagittis.
</p> 
</center>
</div>

</body>

<?php include_once("footer.php"); ?>