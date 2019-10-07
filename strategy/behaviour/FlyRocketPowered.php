<?php


namespace SimUDuck\Behavior;


class FlyRocketPowered implements FlyBehavior
{

    public function fly()
    {
        return "I'm flying with rockets attached to my body!";
    }
}