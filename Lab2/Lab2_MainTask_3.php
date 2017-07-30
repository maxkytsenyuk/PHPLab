<?php

$a = [342, 55, 33, 123, 66, 63, 9];


array_map(function ($element) {
    if (strpos($element, '3') === false) {
        return;
    } else {
        echo $element . ' ';

    }
}, $a);