<?php
echo rozlicz(5);
echo rozlicz(7);
echo rozlicz(3);
function rozlicz($n) {
    $suma = 0;
    $liczba = 7;

    for($i = 0; $i < $n; $i++) {
        $suma += $liczba;
        $liczba += 7;
        //Tak samo jak w zadaniu 5, tylko zamienamy 2 na 7 ezzzzz xpp
    }

    return "Suma $n liczb podzielnych przez 7: $suma <br>";
}