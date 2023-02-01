<?php

trait wakeUp
{
    public function alarm1()
    {
        echo "wake up at 6AM";
    }
}

trait sleep
{
    public function alarm2()
    {
        echo "sleep at 12PM";
    }
}

class DailyWork
{
    use wakeUp, sleep;

    public function alarm3()
    {
        echo "learn english at 12AM";
    }
}

$day = new DailyWork();
$day->alarm1();
echo "<br>";
$day->alarm2();
echo "<br>";
$day->alarm3();
