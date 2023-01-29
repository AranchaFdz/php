<?php
//loops

$ninjas = ['shaun', 'ryu', 'yoshi'];
//for ($i = 0; $i < count($ninjas); $i++){
//echo $ninjas[$i] . '<br />';
//}

//foreach($ninjas as $ninja){
//echo $ninja . '<br />';
//}

$products = [ //muli-functional array
  ['name' => 'handbag', 'price' => 20],//associated array
  ['name' => 'top', 'price' => 10],//associated array
  ['name' => 'shirt', 'price' => 15],//associated array
  ['name' => 'socks', 'price' => 5],//associated array
  ['name' => 'pants', 'price' => 40],//associated array
  ['name' => 'scarf', 'price' => 2], //associated array
];

//foreach($products as $product){ //you can name the second variable as you like, better if its the single of the first
//echo $product['name'] . ' - ' . $product['price'];
//echo '<br />';
//}

$i = 0; //Initialize the variable outside the loop its not local

while($i < count($products)){
  echo $products[$i]['name'];
  echo '<br/>'; //skip a line
  $i++; // after each iteration you increase the loop by 1, you increment inside the loop
}

//loops

//$blogs = [blog1, blog2, blog3, blog4, blog5]
//for ($i = 0; $i < count($blogs); $i++) {
//echo 'same template';
//}

//for ($i = 0; $i > 5; $i++) {
//echo 'same template';
//}

//$blogs = [blog1, blog2, blog3, blog4, blog5]
//foreach ($blogs as $blog) {
//echo 'same template';
//}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials Loops</title>
</head>
<body>
  <h1>Products</h1>
  <ul>
    <?php foreach($products as $product){ ?>

      <h3><?php echo $product['name']; ?></h3>
      <p>$ <?php echo $product['price']; ?></p>

      <?php } ?>
  </ul>
</body>
</html>