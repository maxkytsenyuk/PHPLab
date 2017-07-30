<?php

$bandName = 'seconds';
echo bandNameTransformation($bandName);

function bandNameTransformation($bandName)
{
    $bandLength = mb_strlen($bandName);

    if ($bandName[0] == $bandName[$bandLength - 1]) {
        return ucfirst(rtrim($bandName, $bandName[$bandLength - 1]) . $bandName);
    } else {
        return 'The ' . ucfirst($bandName);
    }
}