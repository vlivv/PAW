<?php require_once dirname(__FILE__) .'/../config.php';?>



<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>


					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz miesięczną ratę.</p>

					<form action="<?php print(_APP_ROOT); ?>/app/kalkredyt.php#result" method="post">
                                            <fieldset>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="text" name="x" id="id_x" placeholder="kwota" value="<?php out($x) ?>" />
                                                                <input type="text" name="y" id="id_y" placeholder="lata" value="<?php out($y) ?>" />
                                                                <input type="text" name="z" id="id_z" placeholder="oprocentowanie" value="<?php out($z) ?>" />
							</div>
							<div class="col-4 col-12-mobilep">
                                                            <button type="submit" class="button">oblicz</button>
							</div>
						</div>
                                            </fieldset>
					</form>
                                        <br>

				
<div id="result">  
                                
      <?php

      
if (isset($messages)) {
	if (count ( $messages ) > 0) {
        
		echo '<h4>wystąpiły błędy: </h4>';
               
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		
}
}
?>

<?php if (isset($rata)){ ?>
                                
                                                               
<h4>miesięczna rata wynosi: <?php print($rata); ?> </h4>
										
<?php } ?>                          
 </div>                                
</section>
                            
<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
			