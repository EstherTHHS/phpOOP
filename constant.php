<?php

class ageK
{

    private $person;
    private $ageVar;

    const drinkAge = 18;

    public function __construct($name, $age)
    {
        $this->person = $name;
        $this->ageVar = $age;
    }
    public  function ageLimit()
    {
        if ($this->ageVar > self::drinkAge) {
            echo "over 18 can drink";
        } else {
            echo "Under 18 still drink water";
        }
    }
}

// $person = new ageK("mary", 22);
// $person->ageLimit();


echo ageK::drinkAge;
