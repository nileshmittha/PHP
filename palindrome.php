<?php
function isPalindrome($str) {
    $str = strtolower($str);
    
    $str = preg_replace("/[^a-z0-9]/", "", $str);
    
    $reversed = strrev($str);
    
    if ($str == $reversed) {
        return true;
    } else {
        return false;
    }
}

$input = "A man, a plan, a canal, Panama!";
if (isPalindrome($input)) {
    echo "$input is a palindrome.";
} else {
    echo "$input is not a palindrome.";
}
?>
