<?php

use Task\ClimateInfo;
use Task\City;
use Task\MajorCity;
use Task\TouristsGuide;

require_once "autoload.php";

$f1 = new ClimateInfo(20, 32);
$f2 = new ClimateInfo(15, 31);
$f3 = new ClimateInfo(12, 35);
$c1 = new City("sofia","ABV",1,$f1);

$c2 = new city("burgas","GFD",1,$f2);
$c3 = new MajorCity("kn", "ASW", 1,$f3, 1000000);

$guide = new TouristsGuide(3);
$guide->addCity($c1);
$guide->addCity($c2);
$guide->addCity($c3);
 $guide->Temperature(true).PHP_EOL;
$h = new HotMegapolisAdvisor();
$guide->getBest($h);
 

