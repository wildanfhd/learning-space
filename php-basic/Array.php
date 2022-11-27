<?php
// Cara Pertama
// $values = array(1, 2, 3, 4);
// var_dump($values);

// Cara Kedua
// $names = ["Kyujin", "Sullyoon", "Jinni"];
// var_dump($names);

// Membuat array dengan key berupa string
$toppings = ['Chocolate', 'Cheese', 'Chocochips', 'Boba'];

$toppings['ketchup'] = 'Double Chocolate';
echo $toppings;

// Menghilangkan nilai sebuah array
unset($toppings[2]);
$toppings[] = Srikaya;

echo '</br>';
echo sizeof($toppings);
echo '</br>';
echo count($toppings);

var_dump($toppings);