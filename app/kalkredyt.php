<?php
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];


if ( ! (isset($x) && isset($y) && isset($z))) {	
	$messages [] = 'brak jednego z parametrow';
}

if ( $x == "") {
	$messages [] = 'nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'nie podano liczby lat';
}
if ( $z == "") {
	$messages [] = 'nie podano oprocentowania';
}

if (empty( $messages )) {
	
	if (! is_numeric($x) || $x <= 0) {
		$messages [] = 'wprowadzono błędną kwotę';
	}	
	
	if (! is_numeric($y) || $y <= 0) {
		$messages [] = 'wprowadzono błędną liczbę lat';
	}	

	if (! is_numeric($z) || $z < 0) {
		$messages [] = 'wprowadzono błędne oprocentowanie';
	}	


}

if (empty($messages)) {
    $x = intval($x);
    $y = intval($y);
    $z = floatval($z);
    $miesiace = $y * 12;
    $miesieczneOprocentowanie = $z / 1200;
    
    if ($miesieczneOprocentowanie > 0) {
        $rata = $x * ($miesieczneOprocentowanie * pow(1 + $miesieczneOprocentowanie, $miesiace)) / (pow(1 + $miesieczneOprocentowanie, $miesiace) - 1);
    } else {
        $rata = $x / $miesiace;
    }
    
    $rata = number_format($rata, 2, ',', ' ');
}

include 'kalkredyt_view.php';
