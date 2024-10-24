<?php
//prvni reseni, co neni tabulka (jak jsem to puvodne zamyslel)

$radky = 3;

function radecek()
{
    $sloupce = 4;

    for ($i = 1; $i <= $sloupce; $i++)
        echo '#';
}

for ($i = 1; $i <= $radky; $i++) {
    echo (radecek() . "<br>");
}
;

echo ("<br> -------- <br>");

//tabulka

$radky2 = 3;
$sloupce2 = 4;

echo "<table border='1'>";

for ($i = 1; $i <= $radky2; $i++) { //dokud nepresahuje pocet radku, spusti akci
    echo "<tr>"; //vytvori radek a jedeme dal

    for ($j = 1; $j <= $sloupce2; $j++) { // dokud nepresahuje pocet sloupcu, spousti akci
        echo "<td>" . "#" . "</td>"; //vypise polozku do tabulky a cyklus nad nami pokracuje
    }

    echo "</tr>"; // jakmile je radek hotov, jde se vytvorit novy, dokud hodnota $i nepresahne $radky
}

echo "</table>";