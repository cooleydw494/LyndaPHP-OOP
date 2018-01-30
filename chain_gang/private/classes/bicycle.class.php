<?php
class Bicycle {

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  public const GENDERS = ['Mens', 'Womens', 'Unisex'];
  protected const CONDITIONS = [1 => 'Beat Up', 2 => 'Decent', 3 => 'Good', 4 => 'Great', 5 => 'Like New'];

  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;
  protected $weight_kg;
  protected $condidtion_id;

  public function __construct($args = []) {
    $this->brand = $args['brand'] ?? '';
    $this->model = $args['model'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->color = $args['color'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->weight_kg = $args['weight_kg'] ?? 0.0;
    $this->condition = $args['condition'] ?? 3;

    //alternative method to set all args into properties
    //caution: will set private or protected properties as well
    //if passed in, even if you don't intend to give access
    // foreach($args as $k => $v) {
    //   if (property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  public function condition() {
    if ($this->condition > 0) {
      return self::CONDITIONS[$this->condition];
    } else {
      return 'Unknown';
    }
  }

  public function weight_kg() {
    return number_format($this->weight_kg, 2) . ' kg';
  }

  public function weight_lbs() {
    return number_format((floatval($this->weight_kg) * 2.20462262), 2) . ' lbs';
  }

  public function set_weight_kg($weight) {
    $this->weight_kg = floatval($weight);
  }

  public function set_weight_lbs($weight) {
    $this->weight_kg = floatval($weight) / 2.20462262;
  }
}
