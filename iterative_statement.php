<?php
/*  Iteration literally means repetition of a process.
 So interative statements are constructs that help us repeat some statement a difined no of times. 
    The different iteraive statements available in PHP are
                    1. While Loop
                    2. Do While Loop
                    3. For Loop

1. While Loop: The while-loop through a block of code as long as the specified condition is true. 
Syntax: 
        while(condition is true){
            code to be executred; 
        }

*/
// Example of while loop

/*$num=1;
$num1=2;
while($num<=10){
    $mul=$num*$num1;
    echo "{$num1} * {$num} = {$mul}";
    echo "</br>";
$num++;
}
*/

/*
// Do While Loop
=> The do while loop-Loops through a block of code, once, and then repeat the loop as long as the specified condition is ture.
Syntax:

        do{
            code to be execurted;
        }while (condition is true);

*/
// Example;
/*
$num=1;
$num1=5;
do{
    $mul=$num*$num1;
    echo "{$num1} * {$num} = {$mul}";
    echo "</br>";
$num++;

}
while($num<=10);

*/

/*
// For Loop
=> The for loop is used when you know in advance how many times the script should run. 
Syntax:
    for(init counter; test counter; increment counter){
        code to be executed for each iteration; 
    }

*/


//Example
/*
$num1=10;
for($num=1; $num<=10; $num++){
    $mul=$num*$num1;
    echo "{$num1} * {$num} = {$mul}";
    echo "</br>";
}
*/

/*
            PHP == vs === difference

==      equal           $x==$y      Return true if $x is equal to $y.
===     identical       $x===$y     Return true if $x is equal to $y, and they are ofthe same type.

*/

/*
$num1=5;
$num2="5";
if($num1 == $num2){ // 
    echo "both the value are same</br>";
}else{
    echo "values are same but data types are different</br>";
}


if($num1 === $num2){ // 
    echo "both the value are same</br>";
}else{
    echo "values are same but data types are different</br?";
}
*/

?>