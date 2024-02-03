<!-- Write a PHP program to print Fibonacci series without using recursion -->

<?php

function printFibonacci($n)
{
    $first = 0;
    $second = 1;

    echo "Fibonacci Series up to $n terms: ";

    for ($i = 1; $i <= $n; ++$i) {
        echo $first . ", ";

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$terms = readline("Enter the required no. of Fibonacci Sequence: ");
printFibonacci($terms);

?>