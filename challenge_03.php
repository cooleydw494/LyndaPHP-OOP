<?php
class Bicycle {
  public $brand;
  public $model;
  public  $year;
  public $description;
  protected $wheels = 2;
  protected $weight_kg = 0.0;

  public function name() {
    return "{$this->year} {$this->brand} {$this->model}";
  }

  public function weight_lbs() {
    return (floatval($this->weight_kg) * 2.2046226218) . ' lbs';
  }

  public function set_weight_lbs($lbs) {
    $this->weight_kg = floatval($lbs) / 2.2046226218;
  }

  public function set_weight_kg($kg) {
    if ($kg >= 0) {
      $this->weight_kg = floatval($kg);
    }
  }

  public function weight_kg() {
    return "{$this->weight_kg} kg";
  }

  public function wheel_details() {
    return "It has {$this->wheels} wheel" . ($this->wheels == 1 ? '.' : 's.');
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;

  public function bug_test() {
    return $this->weight_kg;
  }
}

$bicycle1 = new Bicycle();
$bicycle1->brand = 'Schwinn';
$bicycle1->model = 'TurboBike';
$bicycle1->year = '1998';
$bicycle1->description = 'The greatest bike ever made.';
$bicycle1->set_weight_kg(10);

echo 'Bicycle1\'s name is ' . $bicycle1->name() . '<br />';
echo $bicycle1->wheel_details() . '<br />';
echo 'Bicycle1\'s weight is ' . $bicycle1->weight_kg() . '<br />';
echo 'Bicycle1\'s weight is ' . $bicycle1->weight_lbs() . '<br />';
echo 'Now changing weight with set weight kg to 20 kg<br />';
$bicycle1->set_weight_kg(20);
echo 'Bicycle1\'s weight is ' . $bicycle1->weight_lbs() . '<br />';
echo 'Bicycle1\'s weight is ' . $bicycle1->weight_kg() . '<br />';

echo '<br />';

$unicycle1 = new Unicycle();
$unicycle1->brand = 'Schwinn';
$unicycle1->model = 'UniBike';
$unicycle1->year = '1882';
$unicycle1->description = 'The greatest unicycle ever made.';
$unicycle1->set_weight_kg(5);

echo 'Unicycle1\'s name is ' . $unicycle1->name() . '<br />';
echo $unicycle1->wheel_details() . '<br />';
echo 'Unicycle1\'s weight is ' . $unicycle1->weight_kg() . '<br />';
echo 'Unicycle1\'s weight is ' . $unicycle1->weight_lbs() . '<br />';
echo 'Now changing weight with set weight kg to 10 kg<br />';
$unicycle1->set_weight_kg(10);
echo 'Unicycle1\'s weight is ' . $unicycle1->weight_lbs() . '<br />';
echo 'Unicycle1\'s weight is ' . $unicycle1->weight_kg() . '<br />';
