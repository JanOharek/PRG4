<?php

function canBuy($vek = 15) {
    if ($vek < 15) {
        echo "nic";
    } else if ($vek < 18) {
        echo "rachejtle";
    } else if ($vek > 18) {
        echo "vsechno";
    }
}


canBuy();