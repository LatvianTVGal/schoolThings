<?php

// UZDEVUMS 1

$mas = [1,2,3,4,5];

for ($x = 0; $x < count($mas); $x++) {

    echo "$mas[$x]" . '<br>';

}

// UZDEVUMS 2
echo('<br><br>');

$asocMas = [

    'name' => 'Vārds',
    'surname' => 'Uzvārds',
    'age' => 'Vecums',
    'city' => 'Pilsēta'

];

echo('<pre>');
print_r($asocMas);
echo('</pre>');

// UZDEVUMS 3

echo('<br><br>');

$asocMas = [

    12 => 'Vārds',
    'AAAAAAAA' => true,
    'isTrue' => false,
    'test' => 21,
];

echo('<pre>');
var_dump( $asocMas);
echo('</pre>');

// UZDEVUMS 4

$krasas = array();

for ($x = 0; $x <= 20; $x++) {
    array_unshift($krasas, rand(-20,20));
}
echo('<br>');
print_r( value: $krasas);

// UZDEVUMS 5

echo('<br><br>' . count($asocMas) . '<BR>');
echo('<pre>');
var_dump( $asocMas);
echo('</pre>');

// UZDEVUMS 6

$key = array_search('2', $mas);
echo ('key:' . $key);