<?php
// Using implode to join array elements into a string. 
$array=array('Hello', 'Implode', 'Explode');
$string = implode(' ', $array);

echo "Using Implode:";
echo "<br>";
echo "Array". print_r($array, true);
echo "<br>";
echo"Imploded String: $string";
echo "<br>";


// Using explode to split a string into an array. 
$explodedArray = explode(' ', $string);

echo "Using explode";
echo "<br>";
echo "<br>";
echo "Original String: $string";
echo "<br>";
echo "eExplode Array".print_r($explodedArray, true);
?>