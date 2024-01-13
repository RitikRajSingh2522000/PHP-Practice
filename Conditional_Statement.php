<?php
/*                                     If Statement, If else statement and if else if statement

=> The if statement executes some code if one condition is true.
=> The if else statement executes some code if a condition is true and another code if that condition is false.

*/
$day= "tuesday";
if($day=="sunday"){
    echo "today is Holiday\n";
}else if($day=="monday"){
    echo "today is the working day";
}else if($day=="tuesday" || $day=="Wednesday"){ //cheking the condition with or operator which comes unde the logical operator.  
    echo "today is also a working day.";
}
echo "</br>";

// Program to check user-id and password is correct or not.

$user_id="Ritik@123";
$password="Raj123";
if($user_id=="Ritik@123" && $password=="Raj123"){// cheking the codition with and operator which comes under the logical operator
    echo "logged in success";
}else{
    echo "invalide user_id and Password";
}


// checking the ternary operator.
$user="Raj";
$pass="123";
echo "</br>";
echo ($user=="Raj" and $pass="123") ? "login success" : "Wrong user id and password";
//ternary operator work as a conditional statement. 
echo "</br>";






/*

                                Switch Statement

=> The switch statement is used to perform different actions based on different conditions. 

*/


$month=3;
switch($month){
    case 1: 
        echo "Jan";
        break;
    case 2:
        echo "Feb";
        break;
    case 3:
        echo "Mar";
        break;// break keyword are used to break the line when the case value match with the variable value. 
    case 4:
        echo "Apr";
        break;
    case 5: 
        echo "May";
        break;
    case 6:
        echo "Jun";
        break;
    case 7:
        echo "jul";
        break;
    case 8:
        echo "Aug";
        break;
    case 9:
        echo "sep";
        break;
    case 10:
        echo "Oct";
        break;
    case 11:
        echo "Nov";
        break;
    case 12:
        echo "Dec";
        break;
    default:
    echo "You have entered the Wrong Month number";
}

?>