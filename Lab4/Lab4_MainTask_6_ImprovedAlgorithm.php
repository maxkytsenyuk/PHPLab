<?php

$string = 'raersrrrersassswwaaadfdfeeefgtthtgffdd';
$max = 0;
$maxChar = '';
$length = strlen($string);

for ($i = 0; $i < $length; $i++) {

    for ($j = $length; $i < $j; $j--) {
        $currentDistance = $j - $i;

        if ($string[$i] == $string[$j] && ($currentDistance > $max)) {
            $max = $currentDistance;
            $maxChar = $string[$i];
            break;
        }
    }

    if ($max > $length - ($i + $j)) {
        break;
    }
}

echo $maxChar . ': ' . $max;