<?php
/**
 * author Wonkasoft
 * author uri https://wonkasoft.com
 * source https://github.com/Wonkasoft/MailChimpAPI
 * @package MailChimp API
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MailChimp API - Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta charset="UTF-8">
	<meta name="description" content="MailChimp API DEMO Form">
	<meta name="keywords" content="MailChimp, API, Demo">
	<meta name="author" content="Wonkasoft">
		
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h1>This is a Demo Form for the MailChimp API</h1>
			<h3>For more information visit <a href="https://wonkasoft.com">Wonkasoft.com</a></h3>
		</div> <!-- /col-xs-12 -->
	</div> <!-- /row -->
</div> <!-- /container -->

<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<form action="process.php" method="post" class="form-inline">
			  
			  <div class="form-group">
			    <label class="sr-only" for="fname">First Name:</label>
			    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
			  </div>
			  
			  <div class="form-group">
			    <label class="sr-only" for="lname">Last Name:</label>
			    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
			  </div>

			  <div class="form-group">
			    <label class="sr-only" for="email">Email Address:</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
			  </div>
			  
			  <button type="submit" class="btn btn-danger">Submit</button>
			</form>
		</div> <!-- /col-xs-12 -->
	</div> <!-- /row -->
</div> <!-- /container -->

</body>
</html>