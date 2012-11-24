<?php
    require_once('facebook/facebook.php');

    $userName = getName();
    updateCookie($userName);

    // Create our Application instance (replace this with your appId and secret).
    $facebook = new Facebook(array(
        'appId'  => '430288226994015',
  	'secret' => 'f10506c93391260892287bb49cfd1691',
    ));

    // Get User ID
    $user = $facebook->getUser();

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
    echo 'Facebook ID: ' . $user;
   ?> 
  </body>
</html>