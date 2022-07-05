<?php

function checkSameDigitsStringAsInput(string $N) : boolval
{
    $array = str_split($N);
}

function checkSameDigits(int $N) : bool
{
    //$array = str_split($N);
   
    // Get the length of N
    $length = intval(log10($N)) + 1;
 
    // Form the number M of the type
    // K*111... where K is the
    // rightmost digit of N
    $M = (intval(pow(10, $length)) - 1) / (10 - 1);
    $M *= $N % 10;
 
    // Check if the numbers are equal
    if ($M == $N)
        return true;
 
    // Otherwise
    return false;

}

function reverseNumber($number)  
{  
    /* writes number into string. */  
    $num = (string) $number;  
    /* Reverse the string. */  
    $revstr = strrev($num);  
    /* writes string into int. */  
    $reverse = (int) $revstr;   
    return $reverse;  
}  

$authorized = true;
function exitingProcess()
{
    echo "This program computes ";
    exit(-1);
}

if($argc != 2)
{
    echo "You must provide one parameter (a 3 digits number that is not composed of 3 identical digits), like so: for instance php main.php 123";
    exit(-1);
}

if(checkSameDigits($argv[1]))
{
    echo "You must provide a number that is NOT composed of the same digits 111, 222, etc, for instance php main.php 123";    
    exit(-1);
}

//var_dump(strlen($argv[1]));

if(strlen($argv[1]."") != 3)
{
    echo "You must provide a number that is 3 digits long, not more, not less, for instance php main.php 123";
    exit(-1);
}

$mainNumber=$argv[1];

$iteration = 0;
while($mainNumber!=495)
{
    $myArray = str_split($mainNumber);
    rsort($myArray);
    $mainNumber = (intval(implode("", $myArray)));

    $toSubstract = reverseNumber($mainNumber);
    echo "$mainNumber - $toSubstract \n";
    $mainNumber = $mainNumber - $toSubstract;
    
}
echo "\nlanded on: $mainNumber\n";


