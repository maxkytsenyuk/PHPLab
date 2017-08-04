<?php

$a = [342, 55, 33, 123, 66, 63, 9];

$arrayCounter = count($a);
$count = 0;
for ($i = 0; $i < $arrayCounter-1; $i++) {
    $count = $count + substr_count($a[$i], '3');
}
echo $count;
