<?php
function fibonacci($limit) {
    $fibonacciNumbers = [0, 1];
    while (count($fibonacciNumbers) < $limit) {
        $next = $fibonacciNumbers[count($fibonacciNumbers) - 1] + $fibonacciNumbers[count($fibonacciNumbers) - 2];
        $fibonacciNumbers[] = $next;
    }
    return $fibonacciNumbers;
}

$limit = 10; // Change this to generate more Fibonacci numbers
echo "Fibonacci series up to $limit: " . implode(', ', fibonacci($limit));
?>
