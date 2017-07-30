<?php

$transformMap = array('A' => 'T', 'C' => 'G', 'T' => 'A', 'G' => 'C');
echo 'First string: ', strtr('ATTGC', $transformMap), ';';

echo 'Second string: ', strtr('GTAT', $transformMap), '.';