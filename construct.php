<?php
class Animal
{
    private $name;
    private $age;

    public function show()
    {
        echo "Name:" . $this->name . "and Age:" . $this->age;
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}


$cat = new Animal("Gigner", 3);
$cat->show();
