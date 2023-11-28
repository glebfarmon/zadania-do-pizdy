<?php
echo rozlicz(5);
echo rozlicz(8);
echo rozlicz(3);
function rozlicz($n) {
    $suma = 0;
    $liczba = 2;

    for($i = 0; $i < $n; $i++) {
        $suma += $liczba;
        $liczba += 2;
        //To znaczy, ze 5 razy dodajemy do zmiennej suma liczbe, wzrostajace o 2
        //Np: +2 +4 +6 +8 + 10 = 30 -> suma 5 liczb parzystych
    }

    return "Suma $n liczb parzystych: $suma <br>";
}