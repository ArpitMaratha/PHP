<?php

$articles = [
  1=> "Arpit", 2=> "Maratha"
];

if(empty($articles)) {
  echo "Array is empty";
}
else {
    echo "Array is not empty";
}

var_dump (3 == 4);

foreach ($articles as $index => $article) {
  echo $index . ' - ' . $article, " ,";
}

$months = [
  "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
];

$month = 1;

while($month <=1) {
  foreach ($months as $monthss) {
  echo "$monthss, ", "";
}
  $month = $month + 1;
}
