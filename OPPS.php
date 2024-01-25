<?php

//                          OPPS
/* 
=> Opps is about creating classes and objects. Class serves as a template and multiple objects can be created using a class.
=> Class: Class serves as a template and multiple objects can be created using a class. it is also known as the blueprint of the objects. 
=> if car is a class then Swift, Baleno, BMW these are the objects.
=> Why OPPS: OOPs makes it easy to keep the code dry(do not repeat yourself - the code written by the programmer should be reusable).




*/
//To create a new object, use the new statement to instantiate a class:
/*
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
*/




/*
echo "Lets understand OOPS using GTA Vice City<br>";
class Player{
    //Properties
    public $name;  // here public is an access modifier 
    public $speed=5;
    public $running = false;


    // Methods : A functions of class is know as methods
    function set_name($name){
        $this->name=$name; // 
    }
    function get_name(){
        return $this->name;
    }
    function run(){
        $this->running = true;
    }
    function stop_run(){
        $this->running = false;
    }
}
    // IN PHP you want to access the method of the object then you have to use arrow operator. 
    $player1 = new Player(); // creating an object for the class Player
    $player1->set_name("Ritik"); 
    echo $player1 -> get_name();
    echo $player1 -> speed; // calling Properties direcly through object. 
echo "</br>";

    $player2 = new Player(); // creating an object for the class Player
    $player2->set_name("Kundan"); 
    echo $player2 -> get_name();
    echo $player2 -> speed; // calling Properties direcly through object. 
    echo "</br>";

    $player3 = new Player(); // creating an object for the class Player
    $player3->set_name("Gagan"); 
    echo $player3 -> get_name();
    echo $player3 -> speed; // calling Properties direcly through object. 
    echo "</br>";

    */







                                                    // Constructor/ construct()  function
   
   
   
   
   /*
        class Employee{
        // Clss Properties
        public $name;
        public $salary;


        */
        // methods
        // Constructor (if we use constructor then there is no need to create the get and set function to return and assign the value )
        //=> Constructor allows you to initialize object, it is the code which is executed whenever a new object is instantiated/created. 
        // Constructor execute itself when we create an object. 




        /*
constructor without argument / default constructor / No argument constructor
        function __construct(){ // it will call itself when object will create. before write construct alway remember have to do two Time _.
            echo "this is my contructor";

        }
         $rohan = new Employee();
*/





// method with parameter and argument 
        /* 
        function Details($name, $salary){
            echo $name." ".$salary;

        }
         $rohan = new Employee();
         / $rohan -> Details("Ritik", 20000);
        */


/*

// Constructor with argument
function __construct($name, $salary){
    $this->name = $name;
    $this -> salary = $salary;
    echo "my name is ".$name." and my salary is ".$salary;
}


    }
    // creating object with different different name. 
    $rohan = new Employee("Ritik", 20000);    
    echo "</br>my name is ".$name." and my salary is ".$salary;
*/





                                                // __Destructor 
// => 


class Student{
    public $name;
    public $salary;

    // constructor
    function __construct($name1, $salary1){
        $this -> name=$name1;
        $this -> salary=$salary1;

    }
// Destruct: it is used to destruct the object
    function __destruct(){
        echo "I am destructing $this->name"; // here it will show which object is destructing 1st. by the way the last object will destruct first. 
    }
}
$obj=new Student("Ritik", 15000);
$obj2=new Student("Raj", 2000);
$obj3=new Student("Singh", 50000);


echo "The salary of Ritik is $obj->salary <br>";
?>