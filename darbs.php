<?php

echo("Welcome, USER".'<br>');
echo('<br>');

// UZDEVUMS 1
$reiz1=11;
$reiz2=15;
echo("Rezultāts:".$reiz1*$reiz2.'<br>');

// UZDEVUMS 2
$mainigas1=5;
$mainigas2=7;
echo("Mainīgo summa ir ".$mainigas1+$mainigas2.'<br>');

// UZDEVUMS 3

echo($mainigas1.' vai '.$mainigas2.'<br>');

// UZDEVUMS 4

define('mainitie', $mainigas2.' ($mainigais2), '.$mainigas1.' ($mainigais1) ');
echo(mainitie);

// UZDEVUMS 5

$dig1 = 4;
$dig2 = 3;

if($dig2 > $dig1) {
    echo('<br>'.'Nav lielāks!');
    } else {

    echo('<br>'.'IR lielāks!');
    
}

// UZDEVUMS 6

$dig1 = 6;
$dig2 = 5;

if($dig2 > $dig1) {
    echo('<br>'.'IR lielāks!');
    } else {

    echo('<br>'.'NAV lielāks!');
    
}

// UZDEVUMS 7

$m1=rand(1,7);
$m2=rand(1,7);
$m3=rand(1,7);

echo('<br> $m1 = '. $m1 . ', $m2 = '. $m2 . ', $m3 = '. $m3);