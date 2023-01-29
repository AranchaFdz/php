<?php

// Multi-dimensional arrays

$blogs = [
  ['title' => 'Papi y Mami', 'author' => 'Arancha', 'content' => 'lorem', 'likes' => 300],
  ['title' => 'Goya', 'author' =>  'Manu', 'content' => 'lorem', 'likes' => 5],
  ['title' => 'Peccata Minuta', 'author' => 'Unknown', 'content' => 'lorem', 'likes' => 10]
];

//print_r($blogs); // prints everything in the blogs array

//print_r($blogs[1]); // will only print the array in the position 1 or the one that you choose ['mario kart cheats', 'toad', 'lorem', 25],

//print_r($blogs[1][1]); // will print the element that is in the position 1 in the array 1 'toad'

echo count($blogs);

$blogs[] = ['title' => 'Shaila', 'author' => 'Mama y Papa', 'content' => 'lorem', 'likes' => 1000000];
print_r($blogs);

$popped = array_pop($blogs); // eliminates the last array from the list of arrays and it saves it in the variable $popped or the name that you gave
//print_r($popped);

?>