<?php
// $name; variable 
class Student
{
    public $name; //class properties
    public $age;

    public  function show() //class method
    {
        echo "Name:" . $this->name . "and Age:" . $this->age;
    }
}

$studnet1 = new Student();
$studnet1->name = "Meghan";
$studnet1->age = 23;
$studnet1->show();
