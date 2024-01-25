<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Session 1.php"> Go to page 2</a>
    <?php
session_start();
$valueFromPage1 = $_SESSION['example_variable'];

?>
    
</body>
</html>