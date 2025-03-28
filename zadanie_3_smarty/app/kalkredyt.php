

<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';



//trzeba ogatnac logowanie
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form){
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;	
}




function validate(&$form,&$messages,&$hide_intro)
{
    if ( ! (isset($form['x']) && isset($form['y']) && isset($form['z']))) {	
	return false;
    }
      
    $hide_intro = true;
    if ( $form['x'] == "") {
	$messages [] = 'nie podano kwoty';
    }
    if ( $form['y'] == "") {
	$messages [] = 'nie podano liczby lat';
    }
        if ( $form['z'] == "") {
	$messages [] = 'nie podano oprocentowania';
    }


    if (count ( $messages ) != 0) return false;


    if (! is_numeric($form['x']) || $form['x'] <= 0) {
		$messages [] = 'wprowadzono błędną kwotę';
    }	
	
    if (! is_numeric($form['y']) || $form['y'] <= 0) {
		$messages [] = 'wprowadzono błędną liczbę lat';
    }	

	if (! is_numeric($form['z']) || $form['z'] < 0) {
		$messages [] = 'wprowadzono błędne oprocentowanie';
    }
        
    if (count ($messages) != 0) return false;
    else return true;

}

function process(&$form, &$messages, &$rata)
{
   
    $form['x'] = intval($form['x']);
    $form['y'] = intval($form['y']);
    $form['z'] = floatval($form['z']);
    $miesiace = $form['y'] * 12;
    $miesieczneOprocentowanie = $form['z'] / 1200;
    
    if ($miesieczneOprocentowanie > 0) {
        $rata = $form['x'] * ($miesieczneOprocentowanie * pow(1 + $miesieczneOprocentowanie, $miesiace)) / (pow(1 + $miesieczneOprocentowanie, $miesiace) - 1);
    } else {
        $rata = $form['x'] / $miesiace;
    }
    
    $rata = number_format($rata, 2, ',', ' ');
}

$form = null;
$hide_intro = false;
$rata = null;
$messages = array();


getParams($form);
if (validate($form, $messages, $hide_intro)) {
    process($form, $messages, $rata);
}

$smarty = new Smarty\Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','urządzenie, służące do wyliczenia miesięcznej raty kredytu');
$smarty->assign('page_header','Kalkulator');

$smarty->assign('hide_intro',$hide_intro);

$smarty->assign('form',$form);
$smarty->assign('rata',$rata);
$smarty->assign('messages',$messages);


$smarty->display(_ROOT_PATH.'/app/kalkredyt.html');

