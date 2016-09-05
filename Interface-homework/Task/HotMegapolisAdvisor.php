<?php

namespace Task;

class HotMegapolisAdvisor implements ITripAdvisor
{
	public function rate(City $city)
	{
		$rate = 0;
		if($city instanceof  City) {
			$rate = $city->climate->maxTemp;
		} 
		if ($city instanceof  MajorCity) {
			$rate = $city->climate->maxTemp *1.5;
		}
		return $rate;
	}
}