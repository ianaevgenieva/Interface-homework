<?php

namespace Task;
use Task\ClimateInfo;

class City  extends ClimateInfo
{
	protected $name;
	protected $code;
	protected $index;
	protected $climate;
	
	
	public function __construct($name,$code,$index,ClimateInfo $climate)
	{   
		$this->climate = $climate;
		$this->name = $name;
		if (preg_match("/[A-Z]{3}/", $code)) {
			$this->code = $code;
		} else {
			echo "nevalid code...";
		}
		if ($index >=0 && $index <= 1) {
			$this->index = $index;
		} else {
			echo "nevalid index...";
		}
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
		return sprintf("name: %s  code:%s index:%d ",
				$this->name,$this->code,$this->index);
	}
	
	public function setMaxTemp( ClimateInfo $value)
	{
		return $this->maxTemp = $value->maxTemp;
	}
	
	public function getMaxTemp()
	{
		return $this->maxTemp;
	}
}