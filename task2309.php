<?php

// UZDEVUMS 1
function hello() {

    echo('Hello world!');

}

echo hello();

// UZDEVUMS 2

function show_text($text) {

    echo ('<br>' . $text);

};

show_text('Hello world!');
show_text('Bush hid the facts.');
show_text('< *the most obvious egg* <br> > I have a suggestion. :3');

// UZDEVUMS 3

function reizinajums($reiz1, $reiz2) {

    echo ('<br> Jus ievadijat ' . $reiz1 . ' un ' . $reiz2 . ', secigi rezultats ir: ');
    echo ($reiz1 * $reiz2);

}

reizinajums(rand(1,100), rand(1,100));

// UZDEVUMS 4

function numbRand($numb) {
    echo ('<br>');
    switch ($numb) {

        case 0:
            echo "This is zero";
            break;
        case 1:
            echo "This is one";
            break;
        case 2:
            echo "This is two";
            break;
        case 3:
            echo "This is three";
            break;
        case 4:
            echo "This is four";
            break;
        case 5:
            echo "This is five";
            break;
        case 6:
            echo "This is six";
            break;
        case 7:
            echo "This is seven";
            break;
        case 8:
            echo "This is eight";
            break;
        case 9:
            echo "This is nine";
            break;
        default:
            echo "wtf is this *dies*";
            break;
    }


}

echo numbRand(rand(0,9));

// UZDEVUMS 5

function eksp($a, $b) {

    $result = 1;
    for ($i = 0; $i < $b; $i++) {
        $result *= $a;
        }
    echo ('<br>'. $a . '<br>'. $b . '<br>');
    return $result;
    }
echo (eksp(rand(1,100), rand(1,100)));

// UZDEVUMS 6

function backTrack($numb) {

    for ($x = 0; $x <= $numb; $x++) {
    echo $x. '<br>';
    }
}

echo (backTrack(5)); // doesn't include the number itself, can't care