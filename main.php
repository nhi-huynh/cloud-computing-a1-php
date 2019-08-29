<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("Location:https://cloud-computing-a1-php.appspot.com/login");   
    exit();
    // echo "<script type='text/javascript'>window.location.href = '/login';</script>";
}
?>
<html>
    <body>
        Logged in as <?php echo $_SESSION['userId']; ?><br> 
        <a href="/logout">Log out</a>
        <h1>Main content</h1>
    </body>
</html>