<?php

class Employee {
  public $name;
  public $salary;


  function __construct($name, $salary) {
  $this->name = $name;
  $this->salary = $salary;
  }

  function __destruct() {
    echo "I am destructing $this->name <br>";
  }

}

$Arpit = new Employee("Arpit", 30000);
$Maratha = new Employee("Maratha", 40000);
$ArpitMaratha = new  Employee("Arpit Maratha", 50000);

echo "The first employee is Name: $Arpit->name and Salary: $Arpit->salary <br>";
echo "The second employee is Name: $Maratha->name and Salary: $Maratha->salary <br>";
echo "The third employee is Name: $ArpitMaratha->name and Salary: $ArpitMaratha->salary <br>";

?>
