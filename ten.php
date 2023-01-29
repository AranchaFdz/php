<?php

$products = [
  ['name' => 'handbag', 'price' => 20],
  ['name' => 'top', 'price' => 10],
  ['name' => 'shirt', 'price' => 15],
  ['name' => 'socks', 'price' => 5],
  ['name' => 'pants', 'price' => 40],
  ['name' => 'scarf', 'price' => 2], 
];

foreach($products as $product) {

if($product['name'] === 'pants'){ // breaks at the point when the if statement is true and does not print ant more
    break;
}

if ($product['price'] > 15) { // skips the products that are true in the if statement but keeps going through the code
    continue;
}

  echo $product['name'] . '<br />';
  
}
?>