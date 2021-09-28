<?php
class Car{
  public $name;
  public $color;
 
  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}
 
$Baleno = new Car("Baleno");
echo $Baleno->get_name();
?>

