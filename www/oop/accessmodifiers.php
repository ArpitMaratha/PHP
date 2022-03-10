<?php


class Employee {
  private $name = "Arpit";
  private $designation = "PAT";
  protected $salary = 40000;


  function show_method() {
    echo "The name of Employee is: $this->name <br>";
    echo "The designation of Employee is: $this->designation <br>";
    // echo "$this->salary <br>";
  }


}

$Employee1 = new Employee();
$Employee1 -> show_method();

// $Employee1 -> __construct("Arpit", "PAT", 40000);
// $Employee1 -> __construct();
// $Employee1 -> ();

// $Employee2 = new Employee("Maratha");



class Salary extends Employee
{

  function __construct()
  {
    echo "The salar of Employee is: $this->salary <br>";
  }
}
$Employee2 = new Salary();


?>
