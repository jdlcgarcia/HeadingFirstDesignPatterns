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

    abstract public function display();
}