<?php
function reverseNumber($num) {
    $reversedNum = 0;
    
    while ($num > 0) {
        $reversedNum = $reversedNum * 10 + $num % 10;
        $num = (int)($num / 10);
    }
    
    return $reversedNum;
}

$num = 12345;
$reversedNum = reverseNumber($num);
echo "Original number: $num\n";
echo "Reversed number: $reversedNum";
?>
