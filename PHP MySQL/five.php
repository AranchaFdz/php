<?php
// indexed arrays

$peopleOne = ['Arancha', 'Manu', 'Ileen'];
//echo $peopleOne[2];

$peopleTwo = array('Ari', 'Enol', 'Shaila');
//echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
//print_r($ages); // print_r means print readable

$ages[1] = 25; // changes the value of the number in position 1 to 25
//print_r ($ages);

$ages[] = 60; // adds the value of 60 at the end of the array
//print_r ($ages);

array_push($ages, 70); //adds the value at the end of an array
//print_r($ages); 

//echo count($ages); // counts the total of elements you have in your array

$peopleThree = array_merge($peopleOne, $peopleTwo); // How to merge two arrays together
//print_r($peopleThree);

// associative arrays (key and value pairs)

$barOne = ['pym' => 'The best', 'goya' => 'They wish', 'pecata' => 'Too slow'];
//echo $barOne['pym'];
//print_r($barOne);

$barTwo = array('Arancha' => 'Chef', 'Enol' => 'Barman', 'Mari' => 'Waitress', 'Luis' => 'Waiter');
//print_r($barTwo);

$barTwo['Shaila'] = 'The best of the best';// to add a new array
$barTwo['Enol'] = 'Cabron';  // to over right an array
//print_r($barTwo);

echo count($barOne); //counts how many elements in the array

$barThree = array_merge($barOne, $barTwo); // Merges two o more arrays together 
print_r($barThree);

?>