<?php

header("Content-type: text/css; charset: UTF-8");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

$article {
margin: 8px;
font-family: <?=$font_family?>;
}

th {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: <?=$border?> #000;
}

td {
font-family: <?=$font_family?>;
font-size: <?=$font_size?>;
border: <?=$border?> #DDD;
}
