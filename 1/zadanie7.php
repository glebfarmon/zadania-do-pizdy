<?php
echo rozlicz(12, 32);
echo rozlicz(36, 8);

function rozlicz($a, $b) {
    while($a != $b) {
        //Od wiekszej liczby odejmujemy mniejsza, dopoki sie nie zrownaja
        //ps jebac euklidesa
        if($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return "Wynik: $a"; // mozna takze wyswietlic $b zamiast $a, nie ma roznicy, bo liczba sa takie same
}