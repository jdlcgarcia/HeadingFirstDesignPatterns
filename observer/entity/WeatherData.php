<?php
namespace WeatherORama\Entity;

class WeatherData implements Subject
{
    /** @var Observer[] */
    private $observerList;

    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    /** @var float */
    private $pressure;

    /**
     * WeatherData constructor.
     */
    public function __construct()
    {
        $this->observerList = [];
    }

//
//    /**
//     * @return float
//     */
//    private function getTemperature()
//    {
//        return $this->temperature;
//    }
//
//    /**
//     * @return float
//     */
//    private function getHumidity()
//    {
//        return $this->humidity;
//    }
//
//    /**
//     * @return float
//     */
//    private function getPressure()
//    {
//        return $this->pressure;
//    }

    /**
     * Function provided to update all the screens
     */
    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * @param Observer $o
     */
    public function registerObserver(Observer $o)
    {
        $this->observerList[] = $o;
    }

    /**
     * @param Observer $o
     */
    public function removeObserver(Observer $o)
    {
        foreach($this->observerList as $key => $observer) {
            if ($observer == $o) {
                unset($this->observerList[$key]);
            }
        }
    }

    public function notifyObservers()
    {
        foreach($this->observerList as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     * Simulation of receiving data
     * @param $temperature
     * @param $humidity
     * @param $pressure
     */
    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}