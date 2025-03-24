

<?php
require_once dirname(__FILE__).'/../config.php';




//include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x, &$y, &$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;	
}

$hide_intro = false;


function validate(&$x, &$y, &$z, &$messages)
{
    if ( ! (isset($x) && isset($y) && isset($z))) {	
	return false;
    }
      
    $hide_intro = true;
    if ( $x == "") {
	$messages [] = 'nie podano kwoty';
    }
    if ( $y == "") {
	$messages [] = 'nie podano liczby lat';
    }
        if ( $z == "") {
	$messages [] = 'nie podano oprocentowania';
    }


    if (count ( $messages ) != 0) return false;


    if (! is_numeric($x) || $x <= 0) {
		$messages [] = 'wprowadzono błędną kwotę';
    }	
	
    if (! is_numeric($y) || $y <= 0) {
		$messages [] = 'wprowadzono błędną liczbę lat';
    }	

	if (! is_numeric($z) || $z < 0) {
		$messages [] = 'wprowadzono błędne oprocentowanie';
    }
        
    if (count ($messages) != 0) return false;
    else return true;

}

function process(&$x, &$y, &$z,  $messages, &$rata)
{
    global $role;
   
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

$x = null;
$y = null;
$z = null;
$rata = null;
$messages = array();


getParams($x, $y, $z);
if (validate($x, $y, $z, $messages)) {
    process($x, $y, $z, $messages, $rata);
}


$page_title = 'Kalkulator kredytowy';



include 'kalkredyt_view.php';
