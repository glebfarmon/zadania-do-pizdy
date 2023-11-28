<?php
$str = '';

for($i = 0; $i < 5; $i++) {
    $str .= 'O'; //Przy kazdej nastepnej iteracji dodajemy do wiersza 'O'
    // Znaczy to bedzie wyswielano w takiej kolejnosci: O, OO, OOO
    echo $str . "<br>";
}