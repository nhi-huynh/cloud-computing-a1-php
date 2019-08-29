<?php
function write_credentials($userId, $password) //function parameters, two variables.
{
    $handle = fopen('gs://cloud-computing-a1-php.appspot.com/users.txt','w');
    fwrite($handle, $userId);
    fwrite($handle, ", ".$password);
    fclose($handle);
}
?>
