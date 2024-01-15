
<!-- Design an HTML form to acccept input data from the user. the user should be able to enter: temperature. -Select from 0c or 0f -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
<form action="" method="POST">
Enter the temperature: <input type="text" name="temp"></br>
select the type: 
<input type="radio" name="units" value="C">
  <label>C</label>
  <input type="radio" name="units" value="F">
  <label>F</label>
  <input type="submit" name="submit" value="Submit">
  </form>
  <p> the temperature is: 
  <?php
    if(isset($_POST['submit'])){
        $temp = $_POST['temp'];
        if($C = $_POST['C']){
            $te=$temp*9/5+2;
            echo $te;
        }else if($F = $_POST['F']){
            $te=($temp-32)*5/9;
            echo $te;
    }

        
    }
        ?>
  </p>

    
</body>
</html>