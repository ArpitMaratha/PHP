<?php

class Employee {
  protected $name;
  protected $designation = "PAT";
  protected $salary = 40000;




}

// $Employee1 -> __construct("Arpit", "PAT", 40000);
// $Employee1 -> __construct();
// $Employee1 -> ();

// $Employee2 = new Employee("Maratha");



class Programmer extends Employee
{
  private $lang = "python";

  function lang($lang) {
    $this->lang = $lang;
  }

  function name($name) {
    $this->name=$name;
    // echo "$this->salary <br>";
  }

  function getName() {
    echo "The name of Employee is $this->name <br>";
  }


  function getLang() {
    echo "Language Skills of $this->name is $this->lang <br>";
  }

  function salary()
  {
    echo "The salary of Employee is: $this->salary <br>";
  }

  function designation() {
    echo "The designation of Employee is: $this->designation <br> <br> <br>";
  }
}


$Employee1 = new Programmer();

$Employee1->name("Arpit Maratha");

$Employee1->getName();

$Employee1->lang("PHP");

$Employee1->getLang();

$Employee1->salary();

$Employee1->designation();

$Employee2 = new Programmer();

$Employee2->name("Akshit Pamecha");

$Employee2->getName();

$Employee2->lang("Java");

$Employee2->getLang();

$Employee2->salary();

$Employee2->designation();



?>
