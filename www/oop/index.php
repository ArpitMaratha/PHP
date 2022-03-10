<?php

class Player {
  public $name;
  public $speed;

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function set_speed($speed) {
    $this->speed = $speed;
  }

  function get_speed() {
    return $this->speed;
  }

}


$player1 = new player();
$player1->set_name("Arpit Maratha");
$player1->set_speed(5);
echo $player1->get_name();
echo "<br>";
echo $player1->get_speed();
echo "<br>";

$player2 = new Player();
$player2->set_speed(10);
echo $player2->get_speed();
echo "<br>";

$player3 = new Player();
$player3->set_name("Arpit");
echo $player3->get_name();
echo "<br>";

$player3->set_speed(20);
echo $player3->get_speed();
echo "<br>";
