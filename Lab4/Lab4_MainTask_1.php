<?php

echo gethostbyaddr ('206.190.36.45');

echo '</br>';

$domain = 'dotcom.com';
if(filter_var(gethostbyname($domain), FILTER_VALIDATE_IP)){
    echo 'valid';
}else{
    echo 'not valid';
}
