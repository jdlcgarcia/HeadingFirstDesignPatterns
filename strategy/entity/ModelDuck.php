<?php


namespace SimUDuck\Entity;


use SimUDuck\Behavior\FlyNoWay;
use SimUDuck\Behavior\MuteQuack;

class ModelDuck extends Duck
{


    /**
     * ModelDuck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display()
    {
        return "I'm a model duck";
    }
}