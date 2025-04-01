<?php

require_once 'init.php';


switch ($action) {
	default :
		include_once 'app/controllers/KalkCtrl.class.php';
		$ctrl = new KalkCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once 'app/controllers/KalkCtrl.class.php';
		$ctrl = new KalkCtrl ();
		$ctrl->process ();
	break;
	
}
