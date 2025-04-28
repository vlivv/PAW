
<?php
require_once 'init.php';

getRouter()->setDefaultRoute('kalkShow'); 
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('kalkShow',    'KalkCtrl',  ['user','admin']);
getRouter()->addRoute('kalkCompute', 'KalkCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);



getRouter()->addRoute('results',	'ResultsCtrl',	['user','admin']);
getRouter()->addRoute('delete',	'KalkCtrl',	['user','admin']);

getRouter()->go(); 