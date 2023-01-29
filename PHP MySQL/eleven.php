<?php

// functions

//example 1
function sayHello(){
  echo "Good morning Arancha";
}
sayHello(); // prints out what you have written

//example 2
function sayHello($name){
  echo "Good morning $name";
}
sayHello('Manu'); //passing the argument name so you can output the name

 //example 3
function sayHi($name = 'Arancha', $time = 'morning') {// If a name is not passed in it will print default name
  echo "Good $time $name";
}
sayHello('Manu','night'); // will change to say Good night Manu

function formatProduct($product){
  echo "{$product['name']} costs $ {$product['price']} to buy <br /"; // just echos it out
  
}
formatProduct(['name' => 'gold star', 'price' => 20]);

function formatProductt($product){
  return "{$product['name']} costs $ {$product['price']} to buy <br /";  // stores the information in a variable that can be used after
}
$formatted = formatProductt(['name' => 'gold star', 'price' => 20]);
echo $formatted

?>