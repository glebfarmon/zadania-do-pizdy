<?php
$liczba = 10; //w tresci zadania to 1
$suma = 0;
$i = 0;

do {
    $suma += $liczba;
    $liczba++;
    $i++;

    //Działa to tak:
    //1: 0 + 1;
    //2: 1 + 2;
    //3: 3 + 3;
    //4: 6 + 4;
    //dopiero suma nie bedzie mniej lub rowna sie 100 i wypiszemy $liczebnik

} while($suma <= 100);

echo $i;