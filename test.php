<?php
function najdi_nejmen($pole)
{
    $nejmensi = $pole[0];
    for ($i = 0; $i < count($pole); $i++) {
        $aktual_prvek = $pole[$i];
        if ($aktual_prvek < $nejmensi) {
            $nejmensi = $aktual_prvek;
        }
    }
    return $nejmensi;
}
?>