<?php
function bmi($weight, $height) {
    $bmi = $weight/pow($height, 2);

    switch ($bmi) {
        case $bmi <= 18.5:
            return "Underweight";
        case $bmi <= 25.0:
            return "Normal";
        case $bmi <= 30.0:
            return "Overweight";
        case $bmi > 30:
            return "Obese";
        default:
            return "";
    }
}

function bmi1($weight, $height)
{
    $bmi = $weight/pow($height, 2);

    if ($bmi > 30) return "Obese";

    if ($bmi <= 18.5) {
        return "Underweight";
    } elseif ($bmi <= 25.0) {
        return "Normal";
    } elseif ($bmi <= 30.0) {
        return "Overweight";
    }
}

function bmi2($weight, $height) {
    $bmi = $weight/($height*$height);

    return match(true) {
        $bmi > 30 => "Obese",
        $bmi <= 18.5 => "Underweight",
        $bmi <= 25.0 => "Normal",
        $bmi <= 30.0 => "Overweight"
    };
}
