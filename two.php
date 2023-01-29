<?php
    
    //variables
    define('NAME', 'Manu'); //using the word define = a constant variable
    $name = 'Arancha';
    $age = 44;
    $name = 'Manu';
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first PHP file</title>
</head>
<body>
  <h1><?php echo $name; ?></h1>
  <h1><?php echo NAME; ?></h1>
  <h1><?php echo $age; ?></h1>
</body>
</html>