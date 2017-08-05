<?php

$firstArray = [1, 1, 1, 2, 1, 1];
$secondArray = [0, 0, 0.55, 0, 0];
$thirdArray = [3, 1, 5, 3, 7, 4, 1, 5, 7];

//using strval callback function to convert float values to string because array_count_values can't work with floats
$floatToString = array_map('strval', $secondArray);
$valuesFrequencyInArray = (array_count_values($floatToString));

foreach ($valuesFrequencyInArray as $key => $value) {
    if ($value < 2) {
        print_r($key);
    }
}

