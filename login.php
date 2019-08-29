<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("Location:https://cloud-computing-a1-php.appspot.com/main");
    exit();
    // echo "<script type='text/javascript'>window.location.href = '/main';</script>";
}
else{
    include 'validate_users.php';
    if (array_key_exists('userId', $_POST) and array_key_exists('password', $_POST)) {
        $id_input = trim($_POST['userId']);
        $password_input = trim($_POST['password']);
        if (empty($id_input) || empty($password_input))
        {
            echo "Error: User name or password cannot be empty";
        }
        else{ 
            if (validate_users($id_input, $password_input))
            {
                $_SESSION["loggedin"] = true;
                $_SESSION['userId'] = $_POST['userId'];
                header("Location:https://cloud-computing-a1-php.appspot.com/main");
                exit();
                // echo "<script type='text/javascript'>window.location.href = '/main';</script>";
            }
            else
            {
                echo "Error: User name or password is invalid";
            }
        }
    }
}
?>
<html>
    <body>
        <p>Please log in below</p>
        <form action = "/login" method="post">
            Username: <input type="text" name="userId"><br>
            Password: <input type="text" name="password"><br>
            <div><input type="submit" value="Log in"></div>
            <a href="/register">Register</a>
        </form>
    </body>
</html> 
