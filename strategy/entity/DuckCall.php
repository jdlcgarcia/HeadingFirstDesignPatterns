<?php


namespace SimUDuck\Entity;


use SimUDuck\Behavior\Quack;
use SimUDuck\Behavior\QuackBehavior;

class DuckCall
{
    /** @var QuackBehavior */
    protected $quackBehavior;

    /**
     * DuckCall constructor.
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }


}