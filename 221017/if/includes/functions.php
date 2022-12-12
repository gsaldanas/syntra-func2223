<?php
date_default_timezone_set("Europe/Brussels");
function getHello($firstname, $name, $sex = "x")
{
    // $firstname = strtolower($firstname);
    $hour = (int)date('H');
    //$dayTerm = ($hour > 17) ? "Evening" : (($hour > 12) ? "Afternoon" : "Morning");
    $firstname = ucfirst(strtolower($firstname));
    $name = ucfirst(strtolower($name));

    //Begroeting
    $hello = "Goedenavond";
    if ($hour < 6) {
        $hello = "Goedenacht";
    } elseif ($hour < 11) {
        $hello = "Goedemorgen";
    } elseif ($hour < 17) {
        $hello = "Dag";
    }
    // //title
    // $title = "";

    // if ($sex == "f") {
    //     $title = "mevrouw";
    // } elseif ($sex == "m") {
    //     $title = "meneer";
    // }
    switch ($sex) {
        case 'f':
            # code...
            $title = "mevrouw";
            break;
        case 'm':
            # code...
            $title = "meneer";

        default:
            # code...
            $title = "";
            break;
    }

    return "$hello $title $name,";
}
