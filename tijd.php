<?php
$string = readline();
$array = array();
$array[] = $string;

$day = d;
$sec = s;
$min = m;
$hour = h;

$pos = strpos($string);

switch ($string) {
  case $day:
        echo $string * 86400;

    break;

  default:
    echo $string " is geen tijd";
    break;
}
 ?>
