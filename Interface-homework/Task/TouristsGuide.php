<?php

namespace Task;
use Task\City;
use Task\MajorCity;
class TouristsGuide
{
	protected $cities= [];
	protected $counter;
	
	public function __construct($value)
	{
		$this->counter = $value;
	}
	
	public static function convertToFahrenheit($degrees)
	{
		$result = 0;
		$reuslt = $degrees*(9/5)+32;
		return $result;
	}
	public function Temperature($isFahrenheit) 
	{
		if ($isFahrenheit) {
			foreach ($this->cities as $key=>$value){
				echo "Name of the city:".$value->name.
				"min Temp:".static::convertToFahrenheit($value->climate->minTemp)."C".
				"max Temp:".static::convertToFahrenheit($value->climate->maxTemp)."C".PHP_EOL;
			}
		} else {
			foreach ($this->cities as $key=>$value){
				 echo "Name of the city:".$value->name.
				 "min Temp:".$value->climate->minTemp."F".
				 "max Temp:".$value->climate->maxTemp."F".PHP_EOL;
			}
		}
	}
	
	public function  getBest(ITripAdvisor $advisor)
	{    
		$best =0;
		$rate=0;
		for($i =0;$i <count($this->cities);$i++) {
			$rate = $advisor->rate($cities[$i]);
			if ( $best>$rate) {
				return $this->cities[$i]->name;
			}
			$best  = $rate;
		}
	}
	public function addCity(City $city)
	{
		$count = count($this->cities);
		if ($count < $this->counter) {
			$this->cities[]= $city;
		} else {
			echo "cannot add this city";
		}
	}
}