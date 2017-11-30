<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--put icon in browser tab-->
		<link rel="icon" href="favicon.ico" type="image/x-icon"> 
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<!--Page title-->
		<title>Contact</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/contact.css">
	</head>
	<body>
	<!-- Navbar -->
		<div class="w3-top">
			<div class="w3-bar w3-black w3-card">
				<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
				<a href="../index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
				<a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
				<a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
				<div class="w3-dropdown-hover w3-hide-small">
					<button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
					<div class="w3-dropdown-content w3-bar-block w3-card-4">
						<a href="#" class="w3-bar-item w3-button">Merchandise</a>
						<a href="#" class="w3-bar-item w3-button">Extras</a>
						<a href="#" class="w3-bar-item w3-button">Media</a>
					</div>
				</div>
				<a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
			</div>
		</div>
		<!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
			<a href="../index.html" class="w3-bar-item w3-button w3-padding-large">Home</a>
			<a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
			<a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
		</div>
		<div class="contactArea">
			<h2 class="w3-wide w3-center">CONTACT</h2>
			<p class="w3-opacity w3-center"><i>Please get in touch!</i></p>
			<div class="w3-row w3-padding-32" id="w3Padding">
			  <div class="w3-col m6 w3-large w3-margin-bottom">
				<i class="fa fa-map-marker" style="width:30px"></i> Dublin,Kerry,Ireland<br>
				<i class="fa fa-phone" style="width:30px"></i> Phone: +086 3700608<br>
				<i class="fa fa-envelope" style="width:30px"> </i> Email: management@changinggears.ie<br>
			  </div>
			</div>
			<div id="inner">
				<form action="contact.php" method="post" id="contactForm">
					<input class="inputField" type="text" name="name" placeholder="Name" required title="Name needed"><br><br>
					<input class="inputField" type="email" name="email" placeholder="Email"title="email invalid" required><br><br>
					<input id="submit" type="submit" value="Send"><br>
				</form>
				<textarea id="messageTextArea" name="message" form="contactForm">Enter message here...</textarea>
			</div>
		</div>
	</body>
</html>
	