<?php
$students= array(1,2,3,4,5,6,7,21,2,34,52,1,23,4,45);
sort($students); // to arrange the data(number/ words/ alphabates) in ascending order.

foreach($students as $names){
    echo $names." ";
}
echo "</br>";
rsort($students); // To arrange the data (number/ words/ alphabates) in decending order.
foreach($students as $names){
    echo $names." ";
}



?>