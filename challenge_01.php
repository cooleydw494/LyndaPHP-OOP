<?php
class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg;

  function name() {
    return "{$this->year} {$this->brand} {$this->model}";
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($lbs) {
    $this->weight_kg = floatval($lbs) / 2.2046226218;
  }
}

$bicycle1 = new Bicycle();
$bicycle1->brand = 'Schwinn';
$bicycle1->model = 'TurboBike';
$bicycle1->year = '1998';
$bicycle1->description = 'The greatest bike ever made.';
$bicycle1->weight_kg = 10;

echo 'Bicycle1\'s name is ' . $bicycle1->name() . '<br />';
echo 'Bicycle1\'s weight in kg is ' . $bicycle1->weight_kg . '<br />';
echo 'Bicycle1\'s weight in lbs is ' . $bicycle1->weight_lbs() . '<br />';
echo 'Now changing weight with set weight lbs to 20 lbs<br />';
$bicycle1->set_weight_lbs(20);
echo 'Bicycle1\'s weight in lbs is ' . $bicycle1->weight_lbs() . '<br />';
echo 'Bicycle1\'s weight in kg is ' . $bicycle1->weight_kg . '<br />';
