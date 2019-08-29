<?php
function validate_users($id_input, $password_input)
{ 
    $credentials = explode(",",
    file_get_contents('gs://cloud-computing-a1-php.appspot.com/users.txt')
    );
    $arrlength=count($credentials);
    if ($arrlength)
    {
        $userId = trim($credentials[0]);
        $password = trim($credentials[1]);
        // echo "Stored username is ".$userId;
        // echo "Stored password is ".$password;
        // echo "Entered username is ".$id_input;
        // echo "Entered password is ".$password_input;
        if (strcmp($userId, $id_input) || strcmp($password, $password_input)){
            return false;
        }
        else{
            return true;
        }
    }
    else 
    {
        return false;
    }
}
?>
