<?php

namespace app\controllers;

use app\forms\KalkForm;
use app\transfer\KalkRata;


class KalkCtrl {

 
	private $form;   
	private $rata; 
	

	
	public function __construct(){
		$this->form = new KalkForm();
		$this->rata = new KalkRata();
	}
	

	public function getParams(){
	$this->form->x = getFromRequest('x');
	$this->form->y = getFromRequest('y');
	$this->form->z = getFromRequest('z');	
    }
	
    


	public function validate() 
{
    if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {	
	return false;
    }
    if ($this->form->x == "") {
        getMessages()->addError('nie podano kwoty');
    }
    if ($this->form->y == "") {
        getMessages()->addError('nie podano liczby lat');
    }
        if ($this->form->z == "") {
        getMessages()->addError('nie podano oprocentowania');
    }


    if (! getMessages()->isError()) {
    if (! is_numeric($this->form->x) || $this->form->x <= 0) {
		getMessages()->addError('wprowadzono błędną kwotę');
    }	
	
    if (! is_numeric($this->form->y) || $this->form->y <= 0) {
		getMessages()->addError('wprowadzono błędną liczbę lat');
    }	

	if (! is_numeric($this->form->z) || $this->form->z < 0) {
		getMessages()->addError('wprowadzono błędne oprocentowanie');
    }
        
  }
		
		return ! getMessages()->isError();

}
	

	public function action_kalkCompute()
        {
                     
     $this->getParams();       
     if ($this->validate()) {      
            
    $this->form->x = intval($this->form->x);
    $this->form->y = intval($this->form->y);
    $this->form->z = floatval($this->form->z);
    
    
    
    $miesiace = $this->form->y * 12;
    $miesieczneOprocentowanie = $this->form->z / 1200;
    
    if ($miesieczneOprocentowanie > 0) {
        $this->rata->rata = $this->form->x * ($miesieczneOprocentowanie * pow(1 + $miesieczneOprocentowanie, $miesiace)) / (pow(1 + $miesieczneOprocentowanie, $miesiace) - 1);
    } else {
        $this->rata->rata = $this->form->x / $miesiace;
    }
    
    $this->rata->rata = number_format($this->rata->rata, 2, ',', ' ');
}
	$this->generateView();
}

	public function action_kalkShow(){
		$this->generateView();
	}

	public function generateView(){
	
	
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Kalkulator kredytowy');
                getSmarty()->assign('page_description','urządzenie służące do wyliczenia miesięcznej raty kredytu');
                getSmarty()->assign('page_header','Kalkulator');
				
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('rata', $this->rata);
                
                getSmarty()->display('kalkredyt.tpl'); 
	
	}
}
