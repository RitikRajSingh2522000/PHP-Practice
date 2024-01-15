<?php 
$data = array("a", "b");
echo $data[0];
echo "hello";
$foo = 'Bob';              // Assign the value 'Bob' to $foo
$bar = &$foo;              // Reference $foo via $bar.
$bar = "My name is $bar";  // Alter $bar...
echo $bar;
echo $foo;                 // $foo is altered too.
//to change the linies
echo "If you view the source of output frame \r\n you will find a newline in this string.";
echo "<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");




/*
            PHP == vs === difference

==      equal           $x==$y      Return true if $x is equal to $y.
===     identical       $x===$y     Return true if $x is equal to $y, and they are ofthe same type.

*/
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


?>
