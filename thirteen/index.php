<?php

include('includeRequire1.php'); // if it finds an error it shows it but continues reading the code
require('includeRequire1.php'); // if it finds an error it shows it but does not continues reading the code

include 'includeRequire1.php';
require 'includeRequire1.php';

echo 'end of php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> 

  <?php include('includeRequire2.php'); ?>
  <?php include('includeRequire2.php'); ?>
  <?php include('includeRequire2.php'); ?>
  <?php include('includeRequire2.php'); ?>
  
</body>
</html>