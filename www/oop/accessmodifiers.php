<?php


class Employee {
  private $name = "Arpit";
  private $designation = "PAT";
  protected $salary;


  function show_method() {
    echo "$this->name <br>";
    echo "$this->designation <br>";
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

  function show_salary()
  {
    echo "$this->salary <br>";
  }
}
$Employee2 = new Salary();
$Employee2->show_salary();


?>
