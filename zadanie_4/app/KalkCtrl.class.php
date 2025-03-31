<?php




require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/KalkForm.class.php';
require_once $conf->root_path.'/app/KalkRata.class.php';


class KalkCtrl {

	private $messages;   
	private $form;   
	private $rata; 
	private $hide_intro; 

	
	public function __construct(){
		$this->messages = new Messages();
		$this->form = new KalkForm();
		$this->rata = new KalkRata();
		$this->hide_intro = false;
	}
	

	public function getParams(){
	$this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;	
    }
	

	public function validate() 
{
    if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {	
	return false;
    } else { 
			$this->hide_intro = true; 
		}
    if ($this->form->x == "") {
        $this->messages->addError('nie podano kwoty');
    }
    if ($this->form->y == "") {
        $this->messages->addError('nie podano liczby lat');
    }
        if ($this->form->z == "") {
        $this->messages->addError('nie podano oprocentowania');
    }


    if (! $this->messages->isError()) {
    if (! is_numeric($this->form->x) || $this->form->x <= 0) {
		$this->messages->addError('wprowadzono błędną kwotę');
    }	
	
    if (! is_numeric($this->form->y) || $this->form->y <= 0) {
		$this->messages->addError('wprowadzono błędną liczbę lat');
    }	

	if (! is_numeric($this->form->z) || $this->form->z < 0) {
		$this->messages->addError('wprowadzono błędne oprocentowanie');
    }
        
  }
		
		return ! $this->messages->isError();

}
	

	public function process()
{
     $this->getparams();       
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

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
                $smarty->assign('page_description','urządzenie służące do wyliczenia miesięcznej raty kredytu');
                $smarty->assign('page_header','Kalkulator');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('rata', $this->rata->rata);
		$smarty->display($conf->root_path.'/app/kalkredyt.html');
	}
}
