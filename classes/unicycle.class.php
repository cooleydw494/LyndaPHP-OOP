<?php
class Unicycle extends Bicycle {
  protected static $wheels = 1;
  protected static $instance_count = 0;

  public function name() {
    echo 'The Unicycle name() function is being called<br />';
    return parent::name();
  }
}
