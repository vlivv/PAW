<?php


require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/app/KalkCtrl.class.php';

$ctrl = new KalkCtrl();
$ctrl->process();

