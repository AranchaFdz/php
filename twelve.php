<?php
//variable scope

//local vars

function myFunc(){ //the variable $price inside the function only has local scope can not be used outside the actual function
  $price = 10;
  echo $price;
}
myFunc();

function myFunctionTwo($age){ //still only has local scope
  echo $age;
}
myFunctionTwo(25)

// global variables

$name = 'Manu';

function sayHello(){
  global $name; // uses the global variable
  $name = 'Shaila'; //changes the variable name locally and globally
  echo "Hello $name";
}
sayHello(); // = Hello Shaila
echo $name; // = Hello Shaila


function sayBye(&$name){ // if you pass it by reference & means that it will change le variable locally and globally
  $name = 'Shaila';  //uses the global variable but only changes it locally
  echo "bye $name";
}

sayBye($name); //prints out bye Shaila
echo $name; //prints out bye Manu

?>