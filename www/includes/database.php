<?php

function getDB() {
$db_host = "localhost";
$db_name = "myfirst_db";
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
