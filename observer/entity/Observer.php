<?php

namespace WeatherORama\Entity;

interface Observer
{
    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temp, $humidity, $pressure);
}