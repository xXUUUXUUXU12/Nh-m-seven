<?php
// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$address = $_POST["address"];

	// You should perform validation and hashing here

	// Example: Insert user into the database
	$sql = "INSERT INTO users (username, password, email,address) VALUES ('$username', '$password','$email',,'$address')";

	if ($conn->query($sql) === TRUE) {
		echo "Registration successful!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="/electro-master/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="/electro-master/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="/electro-master/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="/electro-master/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="/electro-master/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="/electro-master/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body {
			color: #999;
			background: #f3f3f3;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			border-color: #eee;
			min-height: 41px;
			box-shadow: none !important;
		}

		.form-control:focus {
			border-color: #5cd3b4;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 500px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form h2 {
			color: #333;
			margin: 0 0 30px 0;
			display: inline-block;
			padding: 0 30px 10px 0;
			border-bottom: 3px solid #5cd3b4;
		}

		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #fff;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form label {
			font-weight: normal;
			font-size: 13px;
		}

		.signup-form input[type="checkbox"] {
			margin-top: 2px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			background: #5cd3b4;
			border: none;
			margin-top: 20px;
			min-width: 140px;
		}

		.signup-form .btn:hover,
		.signup-form .btn:focus {
			background: #41cba9;
			outline: none !important;
		}

		.signup-form a {
			color: #5cd3b4;
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #5cd3b4;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>

</head>

<body>
	<!-- HEADER -->
	<?php require_once 'header1.php'; ?>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<?php require_once 'navbar1.php'; ?>
	<!-- /NAVIGATION -->
	<div class="signup-form">
		<form action="/src/Views/client/components/register.php" method="post" class="form-horizontal">
			<div class="col-xs-8 col-xs-offset-4">
				<h2>Sign Up</h2>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Username</label>
				<div class="col-xs-8">
					<input type="text" class="form-control" name="username" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Email </label>
				<div class="col-xs-8">
					<input type="email" class="form-control" name="email" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4"> Address</label>
				<div class="col-xs-8">
					<input type="text" class="form-control" name="address" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Password</label>
				<div class="col-xs-8">
					<input type="password" class="form-control" name="password" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Confirm Password</label>
				<div class="col-xs-8">
					<input type="password" class="form-control" name="confirm_password" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-8 col-xs-offset-4">
					<p><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
					<button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
				</div>
			</div>
		</form>
		<div class="text-center">Already have an account? <a href="/src/Views/client/components/login.php">Login here</a></div>
	</div>

	<!-- FOOTER -->
	<?php require_once 'foot1.php'; ?>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="/electro-master/js/jquery.min.js"></script>
	<script src="/electro-master/js/bootstrap.min.js"></script>
	<script src="/electro-master/js/slick.min.js"></script>
	<script src="/electro-master/js/nouislider.min.js"></script>
	<script src="/electro-master/js/jquery.zoom.min.js"></script>
	<script src="/electro-master/js/main.js"></script>

</body>

</html>