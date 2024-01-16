<?php
                      // PHP Array Function
/*
=> array_pop($arr): This function removes an elemnt from the end of an array.
=> array_push($arr, $val): This function adds an element to the end of an array. 
=> array_shift($arr): This function removes an element form the beginning of an array.
=> array_unshift($arr, $val): This function adds an element to the beginning fo an array.

*/
$data = array(1,2,3,4,5);
array_pop($data); // it will remove the last element of an array.
$value=23;
array_push($data, $value); // it will add the data that are stored in the variable ($value) at the last of the array. 
array_shift($data); // it will remove the first element of an array.
array_unshift($data, $value); // it will add the data that are stored in the varibale ($value) at the begining of the array.
foreach($data as $numbers){

    echo $numbers."</br>";
}








/*                       //Implode/explode function in PHP

=>  Implode() function:- The implode funcion is used to "join elemtns of an array with a string".
=> The implode function in PHP is easily remembered as "array to string", which simply means that it takes an array and returns a string. 
syntax: 
        $result= explode(delimiter, string);
delimiter is used in implode function to add a data bitween all words. and String is a variable name where you have stored data. 


=> The explode function is used to "split a string by a specified string into pieces i.e. it breaks a string into an array".
Syntax: 
    $result= explode(delimiter, string);
    delimiter: what is common between the all words from where you want to break.
    string: string would be directly a line or you may put that lines into a variable. 



*/

$colors = array('red', 'blue', 'pink', 'yellow');

$result= implode("+", $colors); // here i have added + operator bitween the elements,

/*if we don't use implode() function there is also possible to print the elements in one line of string.
but there will be need to pass the index number of the all variable to print. 
*/
// print_r($colors); // it shows the element with their index number.
echo "my fav colors are:".$result;



$biodata= "My name is Ritik Raj Singh.";
$res = explode(" ", $biodata);

foreach($res as $bio){
    echo "</br>".$bio; 
}



?>