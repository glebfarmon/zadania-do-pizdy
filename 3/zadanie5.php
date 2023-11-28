<?php
$rok = date("Y");
$miesiac = (int) date("m"); //uzywam (int) zeby to na pewno byla normalna liczba, a nie wiersz aka "01"
$dzien = date("d");

switch ($miesiac) {
    case 1:
        $miesiac = "stycznia";
        break;
    case 2:
        $miesiac = "lutego";
        break;
    case 3:
        $miesiac = "marca";
        break;
    case 4:
        $miesiac = "kwietnia";
        break;
    case 5:
        $miesiac = "maja";
        break;
    case 6:
        $miesiac = "czerwca";
        break;
    case 7:
        $miesiac = "lipca";
        break;
    case 8:
        $miesiac = "sierpnia";
        break;
    case 9:
        $miesiac = "września";
        break;
    case 10:
        $miesiac = "października";
        break;
    case 11:
        $miesiac = "listopada";
        break;
    case 12:
        $miesiac = "grudnia";
        break;
}

echo "Dzisiaj: $dzien $miesiac $rok rok";