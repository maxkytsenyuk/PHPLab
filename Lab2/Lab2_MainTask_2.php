<?php

$stringToReverse = 'ФЫВА олдж';
$wordsArray = explode(' ', $stringToReverse);

for ($i = 0; $i < count($wordsArray); $i++) {
    $wordsArray[$i] = reverseWord($wordsArray[$i]);
}
echo implode(' ', $wordsArray);


function reverseWord($wordToReverse)
{
    $reversedString = '';
    $length = mb_strlen($wordToReverse, 'UTF-8');

    for (; 0 <= $length; $length--) {
        $reversedString .= mb_substr($wordToReverse, $length, 1, 'UTF-8');
    }
    return $reversedString;
}
