<?php


namespace SimUDuck\Behavior;


class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        return "I can't fly";
    }
}