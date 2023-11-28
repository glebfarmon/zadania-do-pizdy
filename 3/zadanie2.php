<?php
$a = -1;
$b = -2;
$c = 1;

$delta = $b * $b - 4 * $a * $c;

if($delta > 0) {
    $x1 = (-$b + $delta)/(2 * $a);
    $x2 = (-$b - $delta)/(2 * $a);

    $x1 = round($x1, 3);
    $x2 = round($x2, 3);

    echo "x1 = $x1, x2 = $x2";
} elseif ($delta == 0) {
    $x = (-$b)/(2 * $a);
    $x = round($x, 3);
    echo "x = $x";
} else {
    echo "Nie ma rozwiązań";
}