<?php

class cat
{
    public $name;
    public $age;

    private function show()
    {
        echo "Cat Name:" . $this->name;
        echo "<br>";
        echo "Cat Age:" . $this->age;
    }
    public function show2()
    {
        $this->show();
    }
}

$ginger = new cat();
$ginger->name = "Pauk si";
$ginger->age = 3;
// $ginger->show();
$ginger->show2();
