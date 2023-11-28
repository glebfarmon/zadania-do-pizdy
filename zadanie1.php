<?php
// n! = 10! = 1 * 2 * 3 ... * 10

$n = 10;
$wynik = 1;

for($i = 1; $i <= $n; $i++) {
    $wynik *= $i;
    //$wynik = $wynik * $i;
    // 1 * 1 = 1;
    // 1 * 2 = 2;
    // 2 * 3 = 6;
    // 6 * 4 = 24;
    // 24 * 5 = 120;
    // ...
    // P.S. $wynik i $i sa 1, bo jak beda 0 to wszystko pojdzie w pizdu:
    // gdyby $i sie zaczelo od 0, to: 1 * 0 = 0; 0 * 1 = 0; 0 * 2 = 0;....
    // gdyby $wynik = 0, to: 0 * 1 = 0; 0 * 2 = 0; 0 * 3 = 0;...
}

echo $wynik;