<?php


namespace SimUDuck\Entity;


class RubberDuck extends Duck
{

    public function display()
    {
        return "looks like a rubber duck";
    }

    public function quack()
    {
        return $this->squeak();
    }

    private function squeak()
    {
        return "squeak";
    }
}