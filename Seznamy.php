<?php

$zaci = ["Petr", "Lucie"];

// var_dump($zaci);
// print_r($zaci);


$pocet_zaku = count($zaci);

for ($index = 0; $index < $pocet_zaku; $index++) {
    echo ("Na pozici " . $index + 1  . " je " . " $zaci[$index]" . "." . "<br>");
}

function Ahoj() {
    
}