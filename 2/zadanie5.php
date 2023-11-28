<!DOCTYPE html>
<html>
<head>
    <style>
        p {
            text-align: justify;
            border-bottom: double 3px green; /* dalem 3px zeby bylo widac podwojna linie */
            background-color: yellow;
            color: brown;
            font-family: 'Garamond';
            font-size: 1.9em;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>

<?php
$uncja = 28.35; //1 uncja to 28.35 gramow
$waga_platkow = 300; //0.3kg = 300gr

$uncje = $waga_platkow / $uncja;
$uncje = round($uncje, 2);

echo "<p>Płatki ważą $uncje uncji</p>";

?>

</body>
</html>
