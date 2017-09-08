<?php
/**
 * author Wonkasoft
 * author uri https://wonkasoft.com
 * source https://github.com/Wonkasoft/MailChimpAPI
 * @package MailChimp API
 * @since 1.0.0
 * 
 */

/**
 * This loads all of the API information
 * This loads the list id 
 * 
 */
include( './inc/mailchimp-config.php' );

/**
 * This will load the MailChimp class and namespace
 * 
 */
include( './inc/mailchimpapi.php' );

/**
 * This calls for the namespace
 * 
 */
use \TheApi\MailChimp\MailChimp;
$MailChimp = new MailChimp( $api_key );

/**
 * Submit subscriber data to MailChimp
 * For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * The MailChimp API supports POST, PUT, PULL, DELETE
 * POST Adds new record but will error if data matches ex records
 * PUT Adds new record and if the data matches it will update record
 * PULL Will get matching record from the database
 * DELETE Will delete record from the database
 * Just update the line $result = $MailChimp->post to $result = $MailChimp->put or $result = $MailChimp->pull
 * $result = $MailChimp->delete etc.
 * 
 */
 
$result = $MailChimp->post( "lists/$list_id/members", [
	'email_address' => $_POST['email'],
	'merge_fields'  => [ 'FNAME'=>$_POST['fname'], 'LNAME'=>$_POST['lname'] ],
	'status'        => 'subscribed',
	] );

if ( $MailChimp->success() ) {
	
	/**
	 * Add your success message here and you can use it for your output
	 * @var string
	 */
	$mailchimp_message = "PUT YOUR SUCCESS MESSAGE HERE";

/**
 * This will fire if the process fails
 * use custom error codes for debuging
 * error mc-101
 * 
 */
} else {
	
	/**
	 * Display error
	 * Create a custom message or use echo $MailChimp->getLastError() to post the returned error message
	 * Alternatively you can use a generic error message like: There was an error processing your request
	 * @since 1.0.0
	 * 
	 */
	
	$mailchimp_message = $MailChimp->getLastError();

}

/**
 * This is where you would put your mark up for message 
 * and or redirect to thank you page
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thank you</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta charset="UTF-8">
	<meta name="description" content="This is the processing page / thank you page">
	<meta name="keywords" content="Thank you">
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
			<h3>For more information visit <a href="https://github.com/Wonkasoft/MailChimpAPI">https://github.com/Wonkasoft/MailChimpAPI</a></h3>
		</div> <!-- /col-xs-12 -->
		<div class="col-xs-12 text-center">
			<h3><?php echo $mailchimp_message; ?></h3>
		</div>
	</div> <!-- /row -->
</div> <!-- /container -->
</body> <!-- /body -->
</html> <!-- /html -->