<?php

echo "van welk getal wil je de faculteit weten?";
$getal = readline();
$br = $getal;

for ($i = 1; $i < $getal; $i ++){
    $br = $br * $i;
}

echo "de faculteit van $getal is $br";