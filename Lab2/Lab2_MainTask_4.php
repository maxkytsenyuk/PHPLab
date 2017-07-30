<?php

$a = [342, 55, 33, 123, 66, 63, 9];
$counter = 0;

for ($i = 0; $i < count($a); $i++) {
    (strpos($a[$i], '3') === false) ? $counter : $counter += countProcess($a[$i]);


}
echo $counter;

function countProcess($number)
{
    $counter = 0;
    for ($i = 0; $i < (strlen($number)); $i++) {
        (substr($number, $i, 1) == '3') ? $counter++ : $counter;
    }

    return $counter;
}
