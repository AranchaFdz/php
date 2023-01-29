<?php
//Numbers
$radius = 25; //integer
$pi = 3.14; //Float

// basic = * (Multiple), / (Divide), + (plus), - (minus), ** (To find the power of)

echo $pi * $radius**2;

// Order of Operation (B I D M A S)

echo 2 * (4 + 9) / 3;

//increment & decrement operators

echo $radius++;
echo $radius;

echo $radius--;
echo $radius;

// Shorthand operators
$age = 34;
  $age += 10;
  $age -= 10;
  $age *= 2;
  $age /= 2; 
echo $age;

// Number functions

echo floor ($pi);
echo ceil ($pi);
echo pi();

?>