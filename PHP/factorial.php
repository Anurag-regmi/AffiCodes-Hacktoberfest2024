<?php
function factorial($n) {
    if ($n < 0) {
        return "Invalid input";
    }
    return $n === 0 ? 1 : $n * factorial($n - 1);
}

$number = 5; // Change this to test with different numbers
echo "Factorial of $number is " . factorial($number);
?>
