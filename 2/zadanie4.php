<!DOCTYPE html>
<html>
<head>
    <style>
        p {
            text-align: center;
            font-family: 'Tahoma';
            font-size: 1.5em;
        }
        span {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>

<?php
$oplata_za_wejscie = 5;
$oplata_za_km = 2;
$oplata_za_postoj = 0.5;

$dystans = 8;
$czas_postoju = 15;

$oplata = $oplata_za_wejscie + $oplata_za_km * $dystans + $oplata_za_postoj * $czas_postoju;
$oplata = round($oplata, 2);

echo "<p>Do zapłaty za przejazd <span>$oplata</span> zł</p>";
?>

</body>
</html>
