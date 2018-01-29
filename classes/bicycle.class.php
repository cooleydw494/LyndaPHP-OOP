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
