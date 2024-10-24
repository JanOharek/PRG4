Poznámky
<?php
    // Základní proměnná
    $vek = 20;
    $desetinna = 1.342;
    $cisla = [0,2,11,-1,9];
    $zaci = ["Adam","Karel"];
    $jmeno ="Adéla";
    $zak = new Student("Filip", 1.34);
    $pravda = true;

    /// Operace ///
    // Cisla
    $vys = (5 + 4 - $vek) / 2 * 8;
    $vys = 13 % 5;
    // String -> "Toto je text/string"
    $pozdrav = "Ahoj, jak se mas ";
    $jmeno = "Adelo?";
    $pozdrav_se_jmenem = $pozdrav . $jmeno; // spojeni stringu

    $phone = "Android";
    $text = "Vyhrali jste novy " . $phone . ", honem si vyzvednete svoji cenu!";

    // Větvení
    if ($vek < 18 ){

    } else if ($vek < 18) {

    } else if ($vek >= 18) {

    } else {

    };

    //rozepsané věcičky (for) házejí nápovědy (čtvereček)
    for ($i=0; $i < ; $i++) { 
        # code...
    }

    //převedení textu na číselnou hodnotu - parse
    $cislo = "12";
    $parsedI = intval($cislo); //prevadeni na INT (cele cislo)
    $parsedF = intval("12.8148")

    //funkce
        function jmenoMeFunkce( /*CO JDE IN */ ) {
            //CO SE DEJE UVNITR
            //

            // Vracime nejakou hodnotu (nemusime)
            return ; // CO JDE OUT
        }
        // I. vytvářím funkci
        function pozdrav() {
            echo "Ahoj, jaký je tvůj přihlašovací kód?"
        }

        // II. volám funkci
        pozdrav();
        
    // cyklus For each
        foreach ($zaci as $jedenZak) {
            echo
        }

