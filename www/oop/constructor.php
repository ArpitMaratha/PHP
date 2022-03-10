<?php

class Employee {
  public $name;
  public $salary;


  function __construct($name, $salary) {
  $this->name = $name;
  $this->salary = $salary;
  }



}

$Arpit = new Employee("Arpit", 30000);
$Maratha = new Employee("Maratha", 40000);
$ArpitMaratha = new  Employee("Arpit Maratha", 50000);

echo "The first employee is name: $Arpit->name and salary: $Arpit->salary <br>";
echo "The first employee is name: $Maratha->name and salary: $Maratha->salary <br>";
echo "The first employee is name: $ArpitMaratha->name and salary: $ArpitMaratha->salary <br>";

?>
