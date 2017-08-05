<?php

$array = [1, 2, 3, 4, 3, 2, 1];
$arrayCheck1 = [20, 10, -80, 10, 10, 15, 35];
$arrayCheck2 = [10, -80, 10, 10, 15, 35];

$result = getIndex($array);
echo is_array($result) ? implode(',', $result) : $result;

function getIndex($arrayToProcess)
{
    //array of indexes is created in case there are a couple positions where rightsum = leftsum
    $indexes = [];
    $counter = count($arrayToProcess);
    $rightSum = array_sum($arrayToProcess);
    $leftSum = 0;

    for ($i = 0; $i < $counter; $i++) {
        $rightSum -= $arrayToProcess[$i];
        if ($leftSum == $rightSum) {
            $indexes[] = $i;
        }
        $leftSum += $arrayToProcess[$i];
    }

    return empty($indexes) ? -1 : $indexes;
}


