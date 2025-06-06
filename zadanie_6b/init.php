<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php';

function &getConf(){
    global $conf; return $conf; }

require_once 'core/Messages.class.php';
$messages = new core\Messages();

function &getMessages(){ global $messages; return $messages; }

$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		include_once 'lib/smarty/libs/Smarty.class.php';
		$smarty = new Smarty\Smarty();	
		$smarty->assign('conf',getConf());
		$smarty->assign('messages',getMessages());
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php'; 
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader; return $cloader;
}

require_once 'core/Router.class.php'; 
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once 'core/functions.php';

session_start(); 
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); 

$router->setAction(getFromRequest('action'));