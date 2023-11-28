<?php
echo rozlicz(36, 8);

function rozlicz($a, $b) {
    while($a != $b) {
        //Od wiekszej liczby odejmujemy mniejsza, dopoki sie nie zrownaja
        //PS jebac euklidesa
        if($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}