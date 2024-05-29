<?php
/*function rectangle($x, $y) {
    $starsArray = array_fill(0, $x, '*');
    $line = implode(' ', $starsArray);
    for ($i = 0; $i < $y; $i++) {
        echo $line."\n";
    }
}

rectangle(8,3);
*/

function number_of_days($x)
{
    $month= array("1"=>31,"2"=>28,"3"=>31, "4"=>30, "5"=>31, "6"=>30, "7"=>31,"8"=>31,"9"=>30,"10"=>31,"11"=>30,"12"=>31);
    if (array_key_exists($x, $month)) {
        echo $month[$x];
    } else {
        echo "Такого месяца нет";
    }
}

?>