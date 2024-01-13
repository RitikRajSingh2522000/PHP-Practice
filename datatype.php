<?php
// integer
/*$num1=2; // this is integer (variables name are case sensitive.)
var_dump($num1); // var_dump will show the type of data
echo"</br>";

//float
$num2= 2.5; //float value
var_dump($num2);
echo"</br>";

// String
$Name= "String";// it has a four types 1) Single quates 2) Double Quates 3) Heredoc syntax 4) nowdoc Systax
echo $Name;
echo "My name is $Name";
*/

$name= "Ritik";
echo "my name is $name"; // it will take the value of variable.
echo "</br>";
echo 'My name is $name';// it will not take the value of variable, it will show the variable as same as a message. 
echo "</br>";
echo "my name is \"Ritik\"" ; // to show the name in double quate within the double quates
echo "</br>";

echo 'my name is \'Ritik\''; // to show the name in single quate within the single quates
/*



//Boolean Expressions. The value of True is 1 and the value of false is 0.



var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
*/


// Array (in Php we can store different different types of data into an array)
$array= array("Ritik", "Raj", 123, true);
echo"</br>";
echo $array[0];
echo"</br>";
echo $array[1];
echo"</br>";
echo $array[2];
echo"</br>";
echo $array[3];
for($i=0; $i<count($array); $i++){
    echo $array[$i];
    echo "</br>";
}



?>