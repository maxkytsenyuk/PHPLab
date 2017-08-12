<?php

$string = 'raersrrrersassswwaaadfdfeeefgtthtgffdd';
$max = 0;
$maxChar = '';
$length = strlen($string) - 1;

for ($i = 0; $i < $length; $i++) {

    for ($j = $length; $i < $j; $j--) {
        $currentDistance = $j - $i;

        if ($max > $currentDistance) {
            break;
        } elseif ($string[$i] == $string[$j] && ($currentDistance >= $max)) {
            $max = $currentDistance;
            $maxChar = $string[$i];
            break;
        }
    }

    if ($max > $length - ($i + 1)) {
        break;
    }
}

echo $maxChar . ': ' . $max;