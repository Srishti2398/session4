<?php
echo "<prep>";
// Abstract class
abstract class Base {
	function __construct() {
		echo "this is abstract class constructor<br>";
	}

	// This is abstract function
	abstract function print();
}
class Derived extends base {
	function __construct() {
		echo "\n Derived class constructor<br>";
	}
	function print() {
		echo "\n Derived class printfunction<br>";
	}
}
$b1 = new Derived;
$b1->print();
?>

