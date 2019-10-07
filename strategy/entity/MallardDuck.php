<?php

namespace SimUDuck\Entity;

use SimUDuck\Behavior\FlyWithWings;
use SimUDuck\Behavior\Quack;

class MallardDuck extends Duck
{


    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        return "I'm a real Mallard duck";
    }
}