<?php
function isPalindrome($string) {
    $cleanedString = preg_replace("/[^A-Za-z0-9]/", "", strtolower($string));
    return $cleanedString === strrev($cleanedString);
}

$testString = "A man, a plan, a canal, Panama"; // Change this to test different strings
if (isPalindrome($testString)) {
    echo "'$testString' is a palindrome.";
} else {
    echo "'$testString' is not a palindrome.";
}
?>
