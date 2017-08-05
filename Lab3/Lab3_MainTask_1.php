<?php

$array = [1, 5, 2, 4];
$arraySize = count($array);
$resultArray = [];
$indexCounter = 0;

for ($i = 0; $i < $arraySize; $i++) {
    $resultArray += array_fill($indexCounter, $array[$i], $array[$i]);
    $indexCounter+=$array[$i];
}

print_r($resultArray);
