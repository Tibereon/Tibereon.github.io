<?php

$number = ['2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7'=> '7', '8' => 8, '9' => 9, '10' => 10,
    'jack' => 10, 'queen' => 10, 'king' => 10, 'Ace' => 11];
$suits = ['diamonds', 'hearts', 'clubs', 'spades'];
$inPlay = [];
$x = 0;

function array_is_unique($array) {
    return array_unique($array) == $array;
}

while ($x === 0) {
    $randSuit = $suits[array_rand($suits)];
    $cards = array_rand($number);
    $randSuit = $suits[array_rand($suits)];
    $cards = array_rand($number);
    $card1 = $cards . ' of ' . $randSuit;
    $randSuit2 = $suits[array_rand($suits)];
    $cards2 = array_rand($number);
    $card2 = $cards2 . ' of ' . $randSuit2;
    $randSuit3 = $suits[array_rand($suits)];
    $cards3 = array_rand($number);
    $card3 = $cards3 . ' of ' . $randSuit3;
    $randSuit4 = $suits[array_rand($suits)];
    $cards4 = array_rand($number);
    $card4 = $cards4 . ' of ' . $randSuit4;
    $x += 1;
}

array_push($inPlay, $card1, $card2, $card3, $card4);

function getCards($card1, $card2, $card3, $card4) {
    echo ' Your cards are ' . $card1 . ' and ' . $card2;
    echo '<br>';
    echo ' dealers cards are ' . $card3 . ' and ' . $card4;
}

if (array_is_unique($inPlay)) {
    getCards($card1, $card2, $card3, $card4);
} else {
 $x -= 1;
 getCards($card1, $card2, $card3, $card4);
}

if ($number[$cards] + $number[$cards2] > $number[$cards3] + $number[$cards4]) {
    echo '<br>';
    echo " You won!";
} else {
    echo '<br>';
    echo " Dealer won!";
}
