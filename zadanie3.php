<!DOCTYPE html>
<html>
<head>
    <style>
        .pierwszy {
            text-align: justify;
            font-family: 'Verdana';
            font-size: 1.6em;
            color: navy;
            background-color: pink;
            border: 1px dashed navy;
        }
        .drugi {
            text-align: center;
            font-family: 'Comic Sans MS';
            font-size: 1.7em;
            color: green;
            background-color: yellow;
            border: 1px dotted green;
        }
        .trzeci {
            text-align: right;
            font-family: 'Tahoma';
            font-size: 1.1em;
            color: red;
            background-color: silver;
            border: 1px double red;
        }
    </style>
</head>
<body>
<p class="pierwszy">
<?php
// dodajemy spacje pod koniec, zeby liczby nie byly sklejone, znaczy:
// 1234 - 1 2 3 4
// bez dodawania " " - z dodawaniem " "
for($i = 1; $i <= 10; $i++) {
    echo "$i "; // wazne zeby bylo "" a nie '', bo inaczej zmienna nie zadziala kurwa
}
?>
</p>
<p class="drugi">
    <?php
    for($i = 1; $i <= 10; $i++) {
        echo $i * $i . " "; // pamietajmy, ze uzywamy tu kropek zeby skleic wiersz, a nie plusow
    }
    ?>
</p>
<p class="trzeci">
    <?php
    for($i = 1; $i <= 10; $i++) {
        echo sqrt($i) . " "; //sqrt - otrzymac pierwiastek z liczby, trzeba to po prostu zapamietac
    }
    ?>
</p>
</body>
</html>
