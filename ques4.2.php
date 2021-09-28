<?php
class Car {
  public $name;
  public $color;
 
  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The car is {$this->name}."; 
  }
}
 
$Car= new Car("Santro");
?>

