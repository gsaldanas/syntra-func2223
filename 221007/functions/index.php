<?php
date_default_timezone_set("Europe/Brussels");
$teller = 0;
$seconden = $_GET["s"];

function berekenSom($a,$b){
return ($a + $b);
}

function doeIets($a){
    $a = strtoupper($a);
    $a = $a . " - ik heb iets gedaan...";
    return $a;
 }

 function addOne($a){
    $a++;
    $extra = "dit is een tekst die gemaakt wordt in functie addOne";
    return $a;
 }

 function showFutureTime($extra_time = 0){//default waarde aan paramater geven
    $current_time = time() + $extra_time; //+ seconden
    //$current_time = time() + (6*60*60);
    //$current_time = strtotime($extra_time ." hours");
    $str = date("d/m/Y - H\ui\ms\s", $current_time);
    return $str;
 }

echo "som van 5+3 is " . berekenSom(5,3) . "<br/>";
echo berekenSom(10,5) . "<br/>";
echo doeIets("dit is mijn tekst") . "<br/>";
echo addOne($teller) . "<br/>";
echo addOne($teller) . "<br/>";
echo showFutureTime($seconden) . "<br/>";
// echo showFutureTime() . "<br/>";


?>