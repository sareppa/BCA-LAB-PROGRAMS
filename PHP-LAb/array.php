<?php

$marks = array(85, 67, 92, 30, 45, 78, 25, 88, 34, 72);

$distinction = 0;
$failed = 0;

foreach ($marks as $mark) {
    if ($mark >= 75) {
        $distinction++;
    } elseif ($mark < 35) {
        $failed++;
    }
}

echo "Number of Distinction Students: $distinction<br>";
echo "Number of Failed Students: $failed";

?>
