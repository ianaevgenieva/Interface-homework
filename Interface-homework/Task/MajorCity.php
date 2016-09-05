<?php

namespace Task;
use Task\ClimateInfo;
use Task\City;

class MajorCity extends City
{
	protected $people;
	
	public function __construct($name,$code,$index,$climate,$people)
	{
	 	parent::__construct($name,$code,$index,$climate);
		 $this->people = $people;
	}
	
	public function __set($property,$value)
	{
		if(property_exists($this, $property)) {
			return $this->$property = $value;
		}
	}
	
	public function __get($property)
	{
		if(property_exists($this, $property)) {
			return $this->$property;
		}
	}
	
	public function __toString()
	{
		return sprintf("major city:	 name-> %s code->%s index->%d people->%d"
						,$this->name,
						$this->code,
						$this->index,
						$this->people);
						
				
	}
}