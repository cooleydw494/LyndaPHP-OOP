<?php

class Beverage {

  public $name;

  function __construct() {
    echo "New Beverage was created.<br />";
  }

  function __clone() {
    echo "Existing Beverage was cloned.<br />";
  }
}

$a = new Beverage;
$a->name = 'coffee';
echo $a->name . '<br />';

echo '<hr />';

$b = clone $a;
echo $a->name . '<br />';
echo $b->name . '<br />';

$b->name = 'tea';

echo '<hr />';

echo $a->name . '<br />';
echo $b->name . '<br />';

echo '<hr />';

//assignment of objects is by reference, unlike cloning 
$c = $b;
$c->name = "orange juice";
echo $a->name . '<br />';
echo $b->name . '<br />';
echo $c->name . '<br />';
