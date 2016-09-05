<?php

namespace Task;
class ClimateInfo
{
	protected $minTemp;
	protected $maxTemp;
	
	public function __construct($minTemp,$maxTemp)
	{
		$this->minTemp = $minTemp;
		$this->maxTemp = $maxTemp;
	}
	
	public function __get($property)
	{   
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
	
	public function __toString()
	{
		return sprintf("min temp: %d max temp :%d",$this->minTemp,$this->maxTemp);
				
	}
	
	
	
}