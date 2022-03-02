<?php

function getDB1() {
$db_host = "localhost";
$db_name = "contactform";
$db_user = "arpit_www";
$db_pass = "237744";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
 }
 return $conn;
}
?>
