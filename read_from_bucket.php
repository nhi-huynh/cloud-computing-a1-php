<?php

$primes = explode(",",
    file_get_contents('gs://cloud-computing-a1-php.appspot.com/prime_numbers.txt')
);

$arrlength=count($primes);

for($x=0;$x<$arrlength;$x++)
{
    echo "The ". $x ."-th prime number is: ".$primes[$x]."<br>";
}