<?php
class A
{
    public $job = 'Software Developer';
    public function occupation()
    {
        return "He is a " . $this->job;
    }
    public function getOccupation()
    {
        echo self::occupation(); 
    }
}

Class B extends A
{
    public function occupation()
    {
        return "He is a " . $this->job . " and a Project Manager";
    }
}

$b = new B;
$b->getOccupation();