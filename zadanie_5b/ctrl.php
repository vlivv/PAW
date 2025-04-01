<?php
require_once 'init.php';


switch ($action) {
	default :
		$ctrl = new app\controllers\KalkCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		$ctrl = new app\controllers\KalkCtrl();
		$ctrl->process ();
	break;
	
}

