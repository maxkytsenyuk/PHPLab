<?php

$min = rand(0, 59);

if ($min < 15) {
    echo 'first';
} elseif (($min >= 15) && ($min < 30)) {
    echo 'second';
} elseif (($min >= 30) && ($min < 45)) {
    echo 'third';
} elseif (($min >= 45) && ($min <= 59)) {
    echo 'fourth';
}
