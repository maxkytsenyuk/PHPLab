<?php

$array = [1, -2, 3, 4, -5, -4, 3, 2, 1];
$rangeArray = [[1, 3], [0, 4], [6, 8]];
$sumMax = getSum($array, $rangeArray[0][0], $rangeArray[0][1]);
$rangeMax = 0;
$rangeCounter = count($rangeArray);
$currentSum = 0;

for ($i = 1; $i < $rangeCounter; $i++) {
    $currentSum = getSum($array, $rangeArray[$i][0], $rangeArray[$i][1]);

    if ($sumMax < $currentSum) {
        $sumMax = $currentSum;
        $rangeMax = $i;
    }
}

echo '[' . $rangeArray[$rangeMax][0] . ', ' . $rangeArray[$rangeMax][1] . ']: ' . $sumMax;

function getSum($array, $start, $end)
{

    return array_sum(array_slice($array, $start, $end - $start + 1));
}
