<?php

$str = '385934';
$counter = strlen($str);
$sumleft = 0;
$sumright = 0;

for ($i = 0; $i < $counter; $i++) {
    if ($i < $counter / 2) {
        $sumleft += $str[$i];

    } else {
        $sumright += $str[$i];
    }
}

echo ($sumleft == $sumright) ? 'так' : 'ні';

