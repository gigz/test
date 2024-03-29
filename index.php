<?php
    require_once('userManager.php');

    // Create our Application instance (replace this with your appId and secret).
    $userManager = new UserManager();
 
    $facebookUserId = $userManager->getFacebookUserId();

    if (!$facebookUserId)
    {
	header('Location: login.php');
    }
?>

<html>
  <head>
   <title>PHP Test</title>
  </head>
  <body>
   <?php
   
    function sayHello($name)
    {
        echo '<p>Hello, ' . ($name ? $name : 'Anonymous') . '!</p>'; 
    }
    
    function getName()
    {
        $name;
        
        if ($_GET['name'])
        {
            $name = $_GET['name']; 
        }
        else if ($_COOKIE['userName'])
        {
            $name = $_COOKIE['userName'];
        }
        
        return $name;
    }
    
    function updateCookie($name)
    {
        if ($name && $_COOKIE['userName'] != $name)
        {
            setcookie('userName', $name, time() + 3600);
        }
    }
    
    sayHello($userName);
    echo '<br>';
    echo 'Facebook ID: ' . $facebookUserId;
   ?> 
  </body>
</html>