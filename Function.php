<?php
//                         //PHP Functions
// Besides the built-in PHP functions, it is ossible to create yhour own functins. 
// // A funciton is a block of statements that can be used repratedly in a program. 
// A function will not execute automatically when a page loads.
// A function will be executed by a call to the function. 
// Function names follow the same rules as other labels in PHP. 
// A valid funcion name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.

/*
function Name(){ // creating funciton 
echo "My name is Ritik";
}
Name();// calling funcion 
*/


            // How to Pass Arguments/ Parameters in Functions in PHP.

function sum($a, $b){ // here $a and $b is parameter. 

    $sum= $a+$b;
    echo $sum."</br>";
}
sum(25, 10);// Passing Arguments at the time of calling the function. 
sum(20, 20);



            // PHP Default Argument Values Function. 


function mul($a, $b=5){

    $mult=$a*$b;
    echo $mult. "</br>";
}
mul(4); // here it will take default value for variable B .
mul(5, 10); // here it will take value of twice variable according to Argument. 




                            //function Returning values. 

function mul1($x, $y=5){
$mult=$x*$y;
return $mult;
}
$output = mul1(10,4);
$output1 = mul1(10, 5);

echo "the multiplication of two number is: " .$output;
echo "the multiplication of two number is: " .$output;
echo "the multiplication of two number is: " .$output1;
echo "the multiplication of two number is: " .$output;
echo "the multiplication of two number is: " .$output;


?>