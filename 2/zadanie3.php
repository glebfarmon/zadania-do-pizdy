<?php
$dochod = 5000;

$podatek = $dochod - 586.85;
$podatek *= 0.19;

echo round($podatek, 2);
