<?php
class Bicycle {
  public $brand;
  public $model;
  public  $year;
  public $description;
  public $category;
  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  protected static $wheels = 2;
  protected $weight_kg = 0.0;
  protected static $instance_count = 0;

  public static function create() {
    static::$instance_count++;
    $class = get_called_class();
    return new $class;
  }

  public static function count() {
    return static::$instance_count;
  }

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

  public static function wheel_details() {
    return "It has " . static::$wheels . " wheel" . (static::$wheels == 1 ? '.' : 's.');
  }
}

class Unicycle extends Bicycle {
  protected static $wheels = 1;
  protected static $instance_count = 0;

  public function name() {
    echo 'The Unicycle name() function is being called<br />';
    return parent::name();
  }
}


echo 'Bicycle:<br />';
$bicycle1 = Bicycle::create();
$bicycle1->brand = 'Schwinn';
$bicycle1->model = 'TurboBike';
$bicycle1->year = '1998';
echo $bicycle1->name() . '<br />';
echo Bicycle::wheel_details() . '<br />';
$bicycle1->category = Bicycle::CATEGORIES[2];
echo 'Bicycle1\'s category is ' . $bicycle1->category . '<br />';
echo "Bicycle count is " . Bicycle::count() . '<br />';

echo '<br />';

echo 'Unicycle:<br />';
$unicycle1 = Unicycle::create();
$unicycle1->brand = 'Schwinn';
$unicycle1->model = 'UniBike';
$unicycle1->year = '1882';
echo $unicycle1->name() . '<br />';
echo Unicycle::wheel_details() . '<br />';
$unicycle1->category = Unicycle::CATEGORIES[3];
echo 'Unicycle1\'s category is ' . $unicycle1->category . '<br />';
echo "Unicycle count is " . Unicycle::count() . '<br />';
