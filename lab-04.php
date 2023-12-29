<!-- Write a PHP program to print factorial of a number. -->

<?php 
function factorial($num){
    // Base Case: 0! and 1! are both 1
    if ($num == 0 || $num == 1) {
        return 1;
    }
    else{
        return $num*factorial($num-1);
    }
}

$number=readline("Enter a number: ");
$fvalue=factorial($number);

echo "The factorial of $number is $fvalue.";
?>