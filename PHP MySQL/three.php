<?php

//strings
    $stringOne = 'my email is ';
    $stringTwo = 'aferfer1978@gmail.com';
    echo $stringOne . $stringTwo; // a . is used to concatenate two o more strings or variables together

    echo 'Hey my name is' . $name; //variable inserted, can only nbe used with double quotes
    echo "Hey, my name is $name"; //variable interpolation
    echo "The ninja screamed \"WHAAAAAA\"";
    echo 'The ninja screamed "WHAAAAAA"';

    echo $name[1]; //to get individual characters from a string

    //Functions of strings
    echo strlen($name); // the length of a string
    echo strtoupper($name); //Change all the letters to Uppercase
    echo strtolower($name); // Change all the letters to Lowercase
    echo str_replace('M', 'W', $name); // Replace letters 'the letter you want to replace', 'The new letter', The variable

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MySQL</title>
</head>
<body>
  <h1><?php echo $name; ?></h1>
</body>
</html>