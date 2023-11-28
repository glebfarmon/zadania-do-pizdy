<?php
$a = 3;
$b = 4;
$c = 5;

//Sprawdzamy, czy suma dwoch stronn jest zawsze wieksza od trzeciej (czyli trojkat jest dobry)
if($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    $p = ($a + $b + $c) / 2;
    $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    echo "Suma: $s";
} else {
    echo "Trójkąt jest zły";
}