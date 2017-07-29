<?php

$firstString = 'ZzZz';
$secondString = 'ffPFF';

$firstSum = getSumOfASCII(strtoupper($firstString));
$secondSum = getSumOfASCII(strtoupper($secondString));
$compareVal = compareSum($firstSum, $secondSum);

function compareSum($firstSum, $secondSum)
{
    return ($firstSum == $secondSum) ? true : false;
}

function getSumOfASCII($currentString)
{
    $sumOfASCII = 0;

    //depends on locale. can write regular expression [a-zA-Z] instead
    if (ctype_alpha($currentString)) {
        for ($i = 0; $i < strlen($currentString); $i++) {
            $sumOfASCII += ord($currentString[$i]);
        }
    }

    return $sumOfASCII;
}
