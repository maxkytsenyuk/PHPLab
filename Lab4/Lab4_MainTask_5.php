<?php

$arrayFirst = [':)', ';(', ';}', ':-D'];
$arraySecond = [';D', ':-(', ':-)', ';~)'];
$arrayThird = [';]', ':[', ';*', ':$', ';-D'];

echo getNumberOfSmiles($arrayFirst). ', ';
echo getNumberOfSmiles($arraySecond).', ';
echo getNumberOfSmiles($arrayThird);

function getNumberOfSmiles($arrayToCount)
{
    $counter = 0;
    foreach ($arrayToCount as $arrayElement) {
        strpos($arrayElement, ')') || strpos($arrayElement, 'D') ? $counter++ : $counter;
    }

    return $counter;
}
