<html>
    <body>
        
        <?php
        include 'write_credentials.php';

        $alerts = array("Please register below");

        $arrlength = count($alerts);

        for($x = 0; $x < $arrlength; $x++) {
            echo $alerts[$x];
            echo "<br>";
        }

        if (array_key_exists('userId', $_POST) and array_key_exists('password', $_POST)) {
            $id_input = trim($_POST['userId']);
            $password_input = trim($_POST['password']);
            
            

            if (!(empty($id_input) or empty($password_input))){
                write_credentials($id_input, $password_input);
                $alerts[0] =  "Register successful";

                // header('Location: login.');
                // exit();
            }
            else{
                $alerts[0] =  "Error: User name or password cannot be empty";
            }
        }
        else
        {
            $alerts[0] = "Error: User name or password cannot be empty";
        }
        ?>
        
        <form action="/login.php" method="post">
            <div>User ID<textarea name="userId" rows="1" cols="20"></textarea></div>
            <div>Password<textarea name="password" rows="1" cols="20"></textarea></div>

            <div><input type="submit" value="Register"></div>
            
        </form>

        

        
    </body>
</html>