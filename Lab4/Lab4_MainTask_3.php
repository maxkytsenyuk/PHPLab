<?php

$array = [1, 5, 7, 4, 8, 9, 6, 5, 3, 4, 2];
$index = 3;
$length = 5;
print_r(sortArray($array, $index));
print_r(sortArray($array, $index, $length));

function sortArray($array, $index, $length = null)
{
    $length = $length??count($array);
    $sortArray = array_slice($array, $index, $length);
    sort($sortArray);

    (array_splice($array, $index, $length, $sortArray));

    return $array;
}