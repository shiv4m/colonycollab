<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Log the user out
if(isUserLoggedIn())
{
	$loggedInUser->userLogOut();
}

if(!empty($websiteUrl))
{
	$add_http = "";

	if(strpos($websiteUrl,"http://") === false)
	{
		$add_http = "http://";
	}

	header("Location: "."index.php");
	die();
}
else
{
	header("Location: http://".$_SERVER['HTTP_HOST']);
	die();
}

?>
