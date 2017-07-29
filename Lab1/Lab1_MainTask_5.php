<?php

$year = 2016;

if ((($year % 4 == 0) && ($year % 100 !== 0)) || ($year % 400 == 0)) {
    echo 'високосний';
} else {
    echo 'not really';
}
