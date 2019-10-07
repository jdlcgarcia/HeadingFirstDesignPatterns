<?php

use WeatherORama\entity\CurrentConditionsDisplay;
use WeatherORama\Entity\WeatherData;

include "autoloader.php";

$weatherData = new WeatherData();
$currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(80,65,30.4);
$weatherData->setMeasurements(82,70,29.2);
$weatherData->setMeasurements(78,90,29.2);