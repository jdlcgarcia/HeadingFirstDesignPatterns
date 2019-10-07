<?php


namespace SimUDuck\Entity;


use SimUDuck\Behavior\FlyNoWay;
use SimUDuck\Behavior\Squeak;

class RubberDuck extends Duck
{
    /**
     * RubberDuck constructor.
     */
    public function __construct()
    {
        $this->quackBehavior = new Squeak();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        return "I'm a rubber duck";
    }
}