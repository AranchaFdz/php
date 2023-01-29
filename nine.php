<?php

// conditional statements

//$price = 20;

//if ($price < 10) {
  //echo 'the condition is met';
//} else if ($price < 30) {
  //echo 'elseif condition met';
//}  else {
  //echo 'condition not met';
//}

$products = [
  ['name' => 'handbag', 'price' => 20],
  ['name' => 'top', 'price' => 10],
  ['name' => 'shirt', 'price' => 15],
  ['name' => 'socks', 'price' => 5],
  ['name' => 'pants', 'price' => 40],
  ['name' => 'scarf', 'price' => 2], 
];

//foreach($products as $product) {

  //if ($product['price'] < 15 && $product['price'] > 2){ // && = and 
    //echo $product['name'] . '<br/>';

  //if ($product['price'] > 20 || $product['price'] < 10){ // || = or
    //echo $product['name'] . '<br/>';
  //}
//}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>
<body>
  <div>
    <ul>
      <?php foreach($products as $product){ ?>
        <?php if($product['price'] > 15){ ?>
          <li><?php echo $product['name']; ?></li> 
        <?php } ?>
      <?php } ?>
    </ul>
  </div>
</body>
</html>