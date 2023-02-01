<?php



abstract class Cat
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Persion extends Cat
{
    public function getInfo()
    {
        echo $this->name;
        echo "</br>";
        echo $this->age;
    }
}

class BurmeseCat extends Cat
{
    public function getInfo()
    {
        echo $this->name;
        echo "</br>";
        echo $this->age;
    }
}


$newCat = new Persion("kwak kwak", 3);
$newCat->getInfo();

echo "</br>";
$newCat = new BurmeseCat("Wa Tote", 5);
$newCat->getInfo();
