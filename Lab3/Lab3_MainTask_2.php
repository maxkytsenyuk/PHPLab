<?php

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31,
    18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
$elementsCount = count($temperatures);
$avgNumber = array_sum($temperatures) / count($temperatures);
$avgArray = array_slice($temperatures, 0, 3);

for ($i = 3; $i < $elementsCount; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if (abs($avgNumber - $avgArray[$j]) > abs($temperatures[$i] - $avgNumber)) {
            $avgArray[$j] = $temperatures[$i];
            break;
        }
    }
}
echo 'Average temperatures are: ' . implode(',', $avgArray);

sort($temperatures);
echo ' Min temperatures are: ' . implode(',', (array_slice($temperatures, 0, 3)));
echo ' Max temperatures are: ' . implode(',', (array_slice($temperatures, $elementsCount - 3, $elementsCount)));

