<?php

echo "van welk getal wil je de faculteid weten?";
$getal = readline();
$br = $getal;

for ($i = 1; $i < $getal; $i ++){
    $br = $br * $i;
}

echo "de facultijd van $getal is $br";