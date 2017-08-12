<?php

$string = 'raersrrrersassswwaaadfdfeeefgtthtgffdd';
$max = 0;
$maxChar = '';
$length = strlen($string);

for ($i = 0; $i < $length; $i++) {
    $currentMax = 0;

    if (($length - $i) > $max) {
        for ($j = $i + 1; $j < $length; $j++) {
            $currentDistance = $j - $i;
            if ($string[$i] == $string[$j] && ($currentMax < $currentDistance)) {
                $currentMax = $currentDistance;
            }
        }

        if ($max < $currentMax) {
            $max = $currentMax;
            $maxChar = $string[$i];
        }
    } else {
        break;
    }
}
echo $maxChar . ': ' . $max;