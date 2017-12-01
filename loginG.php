<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '370969698331-4jhk97bj5oq3e1h20usqs32p8i33efbv.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'PgxWGd6WrzulLLepCz6DpClg'; //Application client secret
	$redirectURL = 'http://localhost/Social_Login/'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Your Application Name');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>