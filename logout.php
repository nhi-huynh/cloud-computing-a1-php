<?php
// Initialize the session
session_start();
// Unset all of the session variables
$_SESSION = array();
// Destroy the session.
session_destroy();
// Redirect to login page
header("Location:https://cloud-computing-a1-php.appspot.com/login");
exit();
?>