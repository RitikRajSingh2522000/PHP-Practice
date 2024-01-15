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





// how to Replace characters/words in a string in PHP?
//PHP str_replace() function 
// the str-replace() function replaces some characters with some other characters in a string. 
// Note: This function is case-sensitive. Use the str_ireplace() funcion to perform a case-insensitive search. 
//Syntax
// echo str_replace(search, replace, subject);
/*
Subject is the data/content, it would be in the bulk, 
search is the word that you want to replace.
replace is the word that will change.
*/

echo str_replace("ritik","Raj","Hello, this is Ritik</br>");// here it will not change Ritik with Raj, because it is case-sensitive.

echo str_replace("Ritik","Raj","Hello, this is Ritik"); // here Ritik will change with Raj. 

echo str_ireplace("riTik","Singh","Hello, this is Ritik</br>"); // here str_ireplace() function has been used so it is case-insensitive it will replace Singh at the place of Ritik.

$name ="Ritik|Raj|Singh"; // but i need Ritik Raj Singh so
echo str_replace("|", " ", "$name" ); // here it will change | with space. 



?>
