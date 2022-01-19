<?php

// https://edabit.com/challenge/K35QHoBj8qC7b6QXf
class TemperatureConversion
{
    public function convertTemperature($celsius): void
    {
            $fahrenheit = $celsius * 9/5 + 32;
            $kelvin = $celsius + 273.15;

            if ($kelvin <= 0) {
                $kelvin = "Invalid";
            }
        echo "Celsius ($celsius) converted into Fahrenheit: $fahrenheit, & Kelvin $kelvin.\n";
    }
}

$temp = new TemperatureConversion();
$temp->convertTemperature(0);
$temp->convertTemperature(100);
$temp->convertTemperature(-10);
$temp->convertTemperature(-1000); // Invalid for Kelvin
$temp->convertTemperature(300.4);