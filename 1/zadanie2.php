<?php
$n = 50;
$wynik = 0;

for($i = 1; $i <= $n; $i++) {
    $wynik += $i; // 0 + 1 = 1; 1 + 2 = 3; ...
}

echo $wynik;