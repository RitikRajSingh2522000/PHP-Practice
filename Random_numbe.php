<?php
// PHP inbuilt function rand() => it is used to generate the random number.
/*
$random_number = rand();
echo $random_number; // it will show the random number.
echo "</br>";


$random_number1 = rand(0,50); // here 0 is the min and 50 is the max.
echo $random_number1; // it will show random number between 0 to 50.
*/

/* Chalange questions related to random number;
Q) A challenge is to loop through the numbers 1 to 100.
    if a number is a multiple of 3 then output Fizz instead of number.
    if a number is a multiple of 5 then output Buzz instead of the number. 
    if a number is a multiple of both 3 and 5 then output FizzBuzz instead of the nuimber. */

    $random_number1 = rand(1,100); // here 0 is the min and 50 is the max.
     
    for($i=1; $i<=10; $i++){
        if($random_number1%3==0 and $random_number1%5==0){
            echo "fizzbuzz</br>";
        
        }else if($random_number1%5==0){
                echo "Buzz</br>";
            }else if($random_number1%3==0){
                echo "fizz</br>";
            }else{
                echo $random_number1;
                echo "</br>";
            }

        }


    

?>