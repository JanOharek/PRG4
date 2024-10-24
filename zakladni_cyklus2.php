<?php
// Cyklus - loading
for
(
    $pocitadlo = 0;
    $pocitadlo <= 100;
    $pocitadlo++
) 
{
    $nahodne = rand(0.1,1);
    $vypocet = $pocitadlo + $nahodne;
    echo ("Loading $vypocet % <br>");
    
    // postupny vystup do prohlizece
    ob_flush();
    flush();
    sleep(1);
}
?>
