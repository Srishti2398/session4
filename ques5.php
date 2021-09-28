<?php
class Employee
{
	
	Public $name;

	Public $department;

	function __construct($name,$department)

	{
		// This is initializing the class properties
		$this->name=$name;
		$this->department=$department;


	}	
	function show_details()
	{
		echo $this->name." : ";
		echo "Your department is ".$this->department."<br>";
	}
}
	
$employee_obj= new Employee("PQR","Sales");
$employee_obj->show_details();
	
$employee2= new Employee("ABC","IT");
$employee2->show_details();

?>

