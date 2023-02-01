<?php

class Human
{
    static $firstName;
    static $age;
    public static $drinkAge = 18;


    public function __construct($name, $age)
    {
        self::$firstName = $name;
        self::$age = $age;
    }
    public  function show()
    {
        echo "Name:" . self::$firstName . ",Age" . self::$age;
    }
}

class Employee extends Human
{
    private  $cardID;
    public  function __construct($name, $age, $id)
    {
        $this->cardID = $id;
        Parent::__construct($name, $age);
    }
    public function show2()
    {
        Parent::show();
        echo $this->cardID;
        echo self::$drinkAge;
    }
}

$emp = new Employee("John", 26, "001");
// $emp->show();

$emp->show2();
