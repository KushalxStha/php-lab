<!-- Write a PHP program to check prime number -->

<?php 
$number=readline("Enter a number: ");
function isPrime($num){
    if ($num<2) return false;

    // Check for factors upto the square root of the number.
    for ($i=2; $i<=sqrt($num);$i++){
        if ($num % $i == 0) return false;
    }
    return true; // It is prime.
}

if(isPrime($number)){
    echo"The number $number is Prime.";
}
else{
    echo"The number $number is not prime.";
}
?>