<?php


namespace WeatherORama\entity;


class HeatIndexDisplay implements DisplayElement, Observer
{
    /** @var float */
    private $heatIndex = 0;

    /** @var WeatherData */
    private $weatherData;

    /**
     * HeatIndexDisplay constructor.
     * @param WeatherData $weatherData
     */
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }


    public function display()
    {
        echo "Heat index is " . $this->heatIndex."\n";
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     */
    public function update($temp, $humidity, $pressure)
    {
        $this->heatIndex = $this->computeHeatIndex($temp, $humidity);
        $this->display();
    }

    private function computeHeatIndex($temp, $humidity)
    {
        $index = (float)((16.923 + (0.185212 * $temp) + (5.37941 * $humidity) - (0.100254 * $temp * $humidity)
            + (0.00941695 * ($temp * $temp)) + (0.00728898 * ($humidity * $humidity))
            + (0.000345372 * ($temp * $temp * $humidity)) - (0.000814971 * ($temp * $humidity * $humidity)) +
            (0.0000102102 * ($temp * $temp * $humidity * $humidity)) - (0.000038646 * ($temp * $temp * $temp)) + (0.0000291583 *
                ($humidity * $humidity * $humidity)) + (0.00000142721 * ($temp * $temp * $temp * $humidity)) +
            (0.000000197483 * ($temp * $humidity * $humidity * $humidity)) - (0.0000000218429 * ($temp * $temp * $temp * $humidity * $humidity)) +
            0.000000000843296 * ($temp * $temp * $humidity * $humidity * $humidity)) -
        (0.0000000000481975 * ($temp * $temp * $temp * $humidity * $humidity * $humidity)));
		return $index;
    }
}