<?php


namespace WeatherORama\entity;


class ForecastDisplay implements DisplayElement, Observer
{
    /** @var float */
    private $currentPressure;

    /** @var float */
    private $lastPressure;

    /** @var WeatherData */
    private $weatherData;

    /**
     * ForecastDisplay constructor.
     * @param WeatherData $weatherData
     */
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display()
    {
        echo "Forecast: ";
		if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!";
        } else if ($this->currentPressure == $this->lastPressure) {
            echo "More of the same";
        } else if ($this->currentPressure < $this->lastPressure) {
            echo "Watch out for cooler, rainy weather";
        }
		echo "\n";
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temp, $humidity, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }
}