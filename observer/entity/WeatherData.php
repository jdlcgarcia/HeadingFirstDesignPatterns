<?php


class WeatherData
{
    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    /** @var float */
    private $pressure;

    /**
     * @return float
     */
    private function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    private function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    private function getPressure()
    {
        return $this->pressure;
    }

    public function measurementsChanged()
    {
        /* Your code goes here */
    }
}