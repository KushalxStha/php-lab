<!-- Write a PHP program to print Even or Odd number -->

<?php
$num=(int)readline("Enter an Integer: ");

if ($num % 2==0){
    echo"The number $num is even.";
}
else{
    echo"The number $num is odd.";
}
?>