<?php
// Write a php script to conbine two arrays and remove duplicate elements from an array. 
// Solution 
        // Funcion to find union of two arrays. the concept of union here is to remove the duplicate number from the array. 

function arrayunion($arr1, $arr2){ //receving the value that comes at the time of calling the function 
    $merge = array_merge($arr1, $arr2); // array_merge() function is used to merge two or more array together. 
   foreach($merge as $val){
    echo $val." ";
    echo "</br>";
}
    $result=array_unique($merge); // array_union() function is used to remove the duplicate element from an array. 
    echo "The value after removing the duplicate element from an array is:</br>";
    foreach($result as $Value){
        echo "$Value." ; // here the index number of the duplicate number will also remove from the array when you use print_f($result) out of the loop.

    }
}




$array1= array('red', 'yellow', 'blue');
$array2= array('green', 'red', 'pink','black');
arrayunion($array1, $array2); // calling the function 

?>