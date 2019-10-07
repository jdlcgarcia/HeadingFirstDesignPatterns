<?php

namespace SimUDuck\Entity;

use SimUDuck\Behavior\FlyBehavior;
use SimUDuck\Behavior\QuackBehavior;

abstract class Duck
{
    /** @var QuackBehavior */
    protected $quackBehavior;

    /** @var FlyBehavior */
    protected $flyBehavior;

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function swim()
    {
        return "All ducks float, even decoys!";
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    abstract public function display();

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior($quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }


}