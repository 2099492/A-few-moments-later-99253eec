<?php
$a = explode(" ", $argv[1]);
$eind = 0;
// for ($i=0; $i <4 ; $i++) {
//   $argv[1]++;
// }

foreach ($a as $value) {

$last = substr($value, -1);

  switch ($last) {

    case "d":
      $sec=(int)$value*86400;
      $eind += $sec;
      break;

      case "h":
        $sec=(int)$value*3600;
        $eind += $sec;
        break;

        case "m":
          $sec=(int)$value*60;
          $eind += $sec;
          break;


      case "s":
        $sec=$sec+(int)$value;
        $eind += $sec;
              break;

    default:
    echo " is geen getal";
    break;
  }
}

print_r($sec);
print_r(" seconden")

 ?>
