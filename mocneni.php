<?php
// mocneni

$cislo = 3;
$exponent = 1;
while ($exponent <= 10)
{
    $vysledek = pow($cislo, $exponent);
    echo $vysledek . "<br>";
    $exponent += 1; 
}
?>
