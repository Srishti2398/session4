<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Apple is inherited from Fruit
class Apple extends Fruit {
  public function message() {
    echo "Am I a fruit or a veggie? ";
  }
}
$Apple = new Apple("Apple", "red");
$Apple->message();
$Apple->intro();
?>
