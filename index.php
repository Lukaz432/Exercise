<?php

// pirma uzduotis

$array = ['a', 'b'];

foreach ($array as &$value) {
    $value = 'c';
}
//var_dump($array);
// $array = ['c', 'c'];

$x = 0;

// antra uzduotis

function change(&$x) {
    $x = 1;
}

change($x);

print $x; // $x = 1

// trecia uzduotis

$x = 0;
$b = &$x;

unset ($b);

$b = 1;

print $x;

// ketvirta uzduotis

$roll_joint = true;

$joint1 = &$roll_joint;
$joint2 = &$joint1;
$joint3 = &$joint2;

print $joint1;
print $joint2;
print $joint3;

// penkta uzduotis

$sheep = ['blee'];

for ($x = 0; $x < 5; $x++) {
   $sheep[] = &$sheep[$x];
}

$sheep[3] = 'mrrr';

foreach ($sheep as $id => $zodis) {
    unset($sheep[$id]);
    $sheep[$id] = $zodis;
}

$sheep[4] = 'velniop sistema';

var_dump($sheep);

// sesta uzduotis

$array = ['b', '5', 'x', 'x', 'b', 's'];

function count_values($array, $val) {
    $count = 0;

    foreach ($array as $value) {
        if ($value === $val) {
            $count++;
        }
    }

    return $count;
}

$counter = count_values($array, '5');

var_dump($counter);

?>