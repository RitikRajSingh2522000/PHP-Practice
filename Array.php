<?php

                        //Array
//=> An array is a special variable, which can hold more than one value at a time. Array can be used to store linear data of similar types. 
// in PHP, the array() funcion is used to create an array:
/*
Syntax 
    array();

    in PHP, there are three typesof arrays:
    indx arrays-Arrays with a numeric index 
    Associative arrays - Arrays with named keys
    Multidimensional arrays- Arrays containing one or more arrays

    */

   // $Student_details = array("Ritik", "Raj", "G8", 121);
/*
    echo "<pre>";
    print_r($Student_details);
    echo "</br>";
    

    for($a=0; $a<count($Student_details); $a++){
        echo $Student_details[$a];
        echo "</br>";
        print $Student_details[$a];
    }
echo "</br>";
*/
//$total =count($Student_details);


/*
for($b=0; $b<$total; $b++){
    echo $Student_details[$b];
    echo "</br>";
    
}*/
/*
echo "<ol>";
for($i=0; $i<$total; $i++){ // if we don't assign the value of $i=0, then it will take the value of i default 1.
    echo "</br>";
    echo "<li>" .$Student_details[$i]. "</li>"; // here we have used HTML order list and list to print the number.
}
echo "</ol>";
*/





                        // For Each Loop in Array
//=> The foreach loop - Loops through a block of code for each element in an array. 
// => The foreach loop works only on array, and is used to loop through each key/value pair in an array. 


/*
Syntax 
foreach($array as $value){
    code to be executed;
}
*/

$students = array('vinod', 'bahadur', 'thapa');
foreach($students as $names){
    echo "</br>".$names;
}

echo "<ol>";
$students1 = array('vinod', 'bahadur', 'thapa');
foreach($students1 as $names1){
    echo "</br>".$names1;
}
echo "</ol>";



?>
