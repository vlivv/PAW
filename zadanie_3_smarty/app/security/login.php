<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

function getParamsLogin(&$form){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}


function validateLogin(&$form, &$messages){
	if ( ! (isset($form['login']) && isset($form['pass']))) {
		return false;
	}

	if ( $form['login'] == "") {
		$messages [] = 'nie podano loginu';
	}
	if ( $form['pass'] == "") {
		$messages [] = 'nie podano hasła';
	}

	if (count ( $messages ) > 0) return false;

        
	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages [] = 'niepoprawny login lub hasło';
	return false; 
}


$form = array();
$messages = array();
getParamsLogin($form);

$smarty = new Smarty\Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);

if (!validateLogin($form, $messages)) {
    $smarty->assign('form', $form);
    $smarty->assign('messages', $messages);
    $smarty->display(_ROOT_PATH.'/app/security/login_view.html');
} else { 
    header("Location: "._APP_URL);
    exit();
}
