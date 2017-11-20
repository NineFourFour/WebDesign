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
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		
		<div class="login">
			<div id="loginTitle">
				
			</div>
			<div id="inner">
				<form action="login.php" method="post">
					Username <input class="inputField" type="text" name="username" pattern="\w{4,15}" required title="Username invalid"><br><br>
					Password <input class="inputField" type="password" name="password" pattern="\w{6,15}" flag="i" title="Password invalid" required><br><br>
					<input id="submit" type="submit" value="Log in"><br>
				</form>
			</div>
		</div>
	</body>
</html>
	