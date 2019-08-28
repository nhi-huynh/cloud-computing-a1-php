<html>
    <body>
        
        <?php
        include 'validate_users.php';

        $alerts = array("Please log in below");

        $arrlength = count($alerts);

        for($x = 0; $x < $arrlength; $x++) {
            echo $alerts[$x];
            echo "<br>";
        }

        if (array_key_exists('userId', $_POST) and array_key_exists('password', $_POST)) {
            $id_input = $_POST['userId'];
            $password_input = $_POST['password'];

            if (validate_users($id_input, $password_input)){
                $alerts[0] =  "Register successful";

                // header('Location: main.php');
                // exit();
            }
            else{
                $alerts[0] = "Error: User name or password is invalid";
            }
        }
        else
        {
            $alerts[0] = "Error: Username and password cannot be empty";
        }
        ?>

        <form action="/main.php" method="post">
            <div>User ID<textarea name="userId" rows="1" cols="20"></textarea></div>
            <div>Password<textarea name="password" rows="1" cols="20"></textarea></div>

            <div><input type="submit" value="Log in"></div>
            <a href="/register.">Register</a>
        </form>

        

        
    </body>
</html>