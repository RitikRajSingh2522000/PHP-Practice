<?php
$First_name = "Ritik";
$Last_name = "Singh";
echo 'my full name is '.$First_name .$Last_name;

echo "</br>";

$name="Ritik";
$name .= "Raj";
echo $name;

// Q) How to find the length of words or sentence in PHP?
// PHP strlen() function => The strlen() function returns the length of a string.
$data= "Hello, Good Morning this is 'Ritik'. ";
$length = strlen($data);
echo "The length of the string is". $length;// concating the variable with message. 
?>


// How to count the number of words in a string in PHP?
// PHP str_word_count() Function
// The str_word_count() function counts the number of words in a string. 

$data1= "Hello, Again Good Morning, Have a good day ";
$words1 = str_word_count($data1);
echo "The total words in this sentence are: ". $words1;

?>
