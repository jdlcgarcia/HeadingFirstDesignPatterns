<?php

namespace WeatherORama\Entity;

interface Subject
{
    public function registerObserver(Observer $o);

    public function removeObserver(Observer $o);

    public function notifyObservers();
}