<?php


namespace WeatherORama\entity;


class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    /** @var Subject */
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
        echo "Current conditions: ".$this->temperature."F Degrees and ".$this->humidity."% humidity\n";
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }
}