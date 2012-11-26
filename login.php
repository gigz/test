<?php
	require_once('userManager.php');

	$userManager = new UserManager();	
?>
<html>
<head>
<titel>Log-in page</title>
</head>
<body>
<?php
	if (!$userManager->isUserLoggedIn())
	{
?>
	<a href = '<?php echo $userManager->getLoginUrl(); ?>'>Log in</a>
<?php
	}
?>
</body>
</html>