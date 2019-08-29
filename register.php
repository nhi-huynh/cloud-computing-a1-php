<?php
include 'write_credentials.php';
if (array_key_exists('userId', $_POST) && array_key_exists('password', $_POST)) {
    $id_input = trim($_POST['userId']);
    $password_input = trim($_POST['password']);
    if (!empty($id_input) && !empty($password_input)){
        write_credentials($id_input, $password_input);
        // echo "<script type='text/javascript'>window.location.href = '/login';</script>";
        header('Location:https://cloud-computing-a1-php.appspot.com/login');
        exit();       
    }
    else{
        echo "Error: User name or password cannot be empty";
    }
}
?>
<html>
    <body>
        <p>Please register below</p>
        <form action = "/register" method="post">
            Username: <input type="text" name="userId"><br>
            Password: <input type="text" name="password"><br>
            <div><input type="submit" value="Register"></div>
            <p>Already have an account? <a href="/login">log in</a></p>
        </form>
    </body>
</html>