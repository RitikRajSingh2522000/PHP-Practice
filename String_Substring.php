<?php

$originalString = "Hello, G8! This is Ritik";
$substring = "G8";
$position = strpos($originalString, $substring);
if ($position !== false){
    echo "Substring '$substring' found at position '$position'";
    echo "<br>";

    $newString=substr_replace($originalString, "Globus Eight", $position, strlen($substring));
    echo "modified string: $newString";


}else{
    echo "Substring '$substring' not found in the original string.";
}


?>