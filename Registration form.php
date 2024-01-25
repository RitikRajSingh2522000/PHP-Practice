<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration From</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="Father_name">Father's Name:</label>
        <input type="text" id="father's name" name="name" required>
        <br>

        <label for="Mother's_name">Mother's Name:</label>
        <input type="text" id="mother's name" name="Mother's name" required>
        <br>

        <label for="Email">Email:</label>
        <input type="email" id="email" name="Email" required>
        <br>

        <label for="Phone">Phone:</label>
        <input type="number" id="Phone" name="Phone" required>
        <br>

        <label for="Gender">Gender:</label>
        <input type="radio" id="Male" name="Gender" value="Male"> 
        <label for="Gender">Male</label>
        <input type="radio" id="Male" name="Gender" value="Female">
        <label for="Gender">Female</label>
        <br>

        <label>Select your Hobbies</label> <br>
        <input type="checkbox" id="Reading" name="hobbies" value="Reading">
        <label for="hobbies">Reading</label> <br>
        <input type="checkbox" id="Travelling" name="hobbies" value="Travelling">
        <label for="hobbies">Travelling</label> <br>
        <input type="checkbox" id="Dancing" name="hobbies" value="Dancing">
        <label for="hobbies">Dancing</label> <br> 
        <br>
        <label for="Semester"> Choose your Semester</label>
        <select name="Semester" id="Semester">
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
        </select>
        <br><br>

        <input type="submit" name="submit" value="Submit">
        <input type="submit" value="Cancel">


    </form>

    <?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
    //if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $father_name = $_POST["father's name"];
        $mother_name = $_POST["mother's name"];
        $email = $_POST["email"];
        $phone = $_POST["Phone"];

        if(empty($name) || empty($father_name) || empty($mother_name) || empty($email) || empty($phone)){
            echo " All fields are required.";
        }else{
            echo "Registration SuccessFull";
        }
    }



    ?>
    
</body>
</html>