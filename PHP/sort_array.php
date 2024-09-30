<?php
function sortArray($array) {
    sort($array);
    return $array;
}

$myArray = [5, 2, 9, 1, 5, 6]; // Change this to test with different arrays
$sortedArray = sortArray($myArray);
echo "Original array: " . implode(', ', $myArray) . "\n";
echo "Sorted array: " . implode(', ', $sortedArray);
?>
