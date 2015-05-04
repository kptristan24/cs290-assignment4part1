<?php

session_id('mySessionID'); 
session_start();
setcookie (session_id('mySessionID'), "", time() - 3600, "/");
$_SESSION = array();
session_destroy();


    header('LOCATION: login.php');

 //echo '<script> window.location="login.php"; </script>';
 
 //header('Location: login.php');

 ?>