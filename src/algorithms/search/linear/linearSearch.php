<?php

$array=[10,14,19,26,27,31,33,35,42,44];
$number=33;

for ($i = 0; $i <= count($array)-1; $i++) {
    if($array[$i]==$number){
        echo $array[$i] . ' ';
    }
}