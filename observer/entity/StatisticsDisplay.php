<?php


namespace WeatherORama\entity;


class StatisticsDisplay implements Observer, DisplayElement
{
    /** @var float */
    private $maxTemp = 0;

    /** @var float */
    private $minTemp = 200;

    /** @var float */
    private $tempSum = 0;

    /** @var int */
    private $numReadings;

    /** @var WeatherData */
    private $weatherData;

    /**
     * CurrentConditionsDisplay constructor.
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }


    public function display()
    {
        echo "Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings) . "/" . $this->maxTemp . "/" . $this->minTemp."\n";
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temp, $humidity, $pressure)
    {
        $this->tempSum += $temp;
        $this->numReadings++;
        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }
        $this->display();
    }
}