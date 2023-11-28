<?php
echo rozlicz(5);
echo rozlicz(7);
echo rozlicz(3);
function rozlicz($n) {
    $suma = 0;
    $liczba = 7;

    $i = 0;
    while($i < $n) {
        $suma += $liczba;
        $liczba += 7;
        //Tak samo jak w zadaniu 5, tylko zamienamy 2 na 7 ezzzzz xpp
        $i++;
    }

    return "Suma $n liczb podzielnych przez 7: $suma <br>";
}