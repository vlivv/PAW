<?php

namespace app\controllers;


class ResultsCtrl {

    


    
    
    public function action_results() {
        
         $user = unserialize($_SESSION['user']);
    if ($user->role !== 'admin') {
        getMessages()->addError('Brak uprawnień do przeglądania bazy!');
        forwardTo('kalkShow'); 
        return;
    }
    
        try {
            $records = getDB()->select("results", [
             "id",
             "kwota",
             "lata",
             "oprocentowanie",
             "rata",
             "data"
            ]);
            getSmarty()->assign('records', $records);
        } catch (\PDOException $e){
            getMessages()->addError('Błąd bazy danych: '.$e->getMessage());
            
        }

 
		getSmarty()->assign('page_title','Baza z wynikami');                
                getSmarty()->display('ResultsView.tpl'); 
	
	}
        
        
}
