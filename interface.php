<?php
//differnce  class but same method 

/*
*interface is like pointing the direction where class you want to go
for security
multiple extend  
only public function can declare
cannot declare properties in interface
*
*/
interface FruitFamily
{
    public function taste();
}

interface Fruit2
{
    public function taste();
}

class Apple implements FruitFamily, Fruit2
{
    public function taste()
    {
        echo "Sweet apple";
    }
}

class Orange implements FruitFamily
{
    public function taste()
    {
        echo "Sour Orange";
    }
}

function getTaste(FruitFamily $fruit)
{
    $fruit->taste();
}

$apple = new Apple();
$orange = new Orange();
getTaste($apple);
getTaste($orange);
