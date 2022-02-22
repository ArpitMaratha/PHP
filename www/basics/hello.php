<?php

$name = "Arpit";
$lastname = "Maratha";

$message = [
  "one"=> "Arpit",
  "two"=> "Maratha",
  "three"=> "Learning PHP!"
];

$values = [
  "message"=> "Hello World!",
  "count"=> 10,
  "pi"=> 3.14
];

$names = [$name, $lastname];

$people = [
  ["name1"=> "Arpit Maratha", "email"=> "arpit@email.com"],
  ["name2"=> "Askhit Pamecha", "email"=> "akshit@email.com" ]
];

foreach ($values as $index => $value) {
  echo $index . ' - ' . $value, ", ";
}
