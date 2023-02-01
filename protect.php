<?php

class bloodStock
{
    protected $b1;
    protected $b2;

    public function __construct($blood, $stock)
    {
        $this->b1 = $blood;
        $this->b2 = $stock;
    }

    public function __destruct()
    {
        $this->b1 = "O type";
        $this->b2 = 30;
        echo   $this->b1;
    }
}


class bloodBank extends bloodStock
{
    public function totalCount()
    {
        echo $this->b1;
        echo $this->b2;
    }
}

$total = new bloodBank("B", 10);
$total->totalCount();
