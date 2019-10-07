<?php

namespace SimUDuck\Entity;

abstract class Duck
{
    public function quack()
    {
        return "quack";
    }

    public function swim()
    {
        return "swim";
    }

    public function fly()
    {
        return "fly away";
    }

    abstract public function display();
}