<?php

namespace SimUDuck\Entity;

use SimUDuck\Behavior\FlyWithWings;
use SimUDuck\Behavior\Quack;

class RedheadDuck extends Duck
{


    /**
     * RedheadDuck constructor.
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        return "I'm a Redhead";
    }
}