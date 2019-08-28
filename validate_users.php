<?php
$userId = NULL;
$password = NULL;

function validate_users($id_input, $password_input){ //function parameters, two variables.

    $credentials = explode(",",
    file_get_contents('gs://cloud-computing-a1-php.appspot.com/users.txt')
    );

    $arrlength=count($primes);

    if ($arrlength == 2)
    {
        $userId = $credentials[0];
        $password = $credentials[1];

        if (strcmp($userId, $id_input) == 0 and strcmp($password, $password_input) == 0){
            return true;
        }
        else{
            echo "Error: User name or password is invalid";
            return false;
        }
        
    }
    else 
    {
        echo "Error: User name or password is invalid;
        return false;
    }
}
