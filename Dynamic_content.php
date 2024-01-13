<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to take input from user as a form</title>
</head>
<body>
    <form method="POST">
        enter the month number
        <input type="text" placeholder="Month number" name="month">
        <input type="submit" name="submit" value="Submit">
    </form>
    <p> According to the number of month the month name is: 
    <?php
    if(isset($_POST['submit'])){
        $month = $_POST['month'];
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
            function function_alert($message) { 
      
                // Display the alert box  
                echo "<script>alert('$message');</script>"; 
            } 
              
              
            // Function call 
            function_alert("You have entered the Wrong Month number");
            
        }
        
    }
    ?>
    </p>
</body>
</html>