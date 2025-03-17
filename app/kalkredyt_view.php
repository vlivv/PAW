<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>kalkulator kredytowy</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<bod
    
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
    
    
<form action="<?php print(_APP_ROOT); ?>/app/kalkredyt.php" method="post" class="pure-form pure-form-stacked">
	<legend>kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_x">kwota: </label>
		<input id="id_x" type="text" name="x" value="<?php out($x) ?>" />
		<label for="id_y">lata: </label>
		<input id="id_y" type="text" name="y" value="<?php out($y) ?>" />
		<label for="id_z">oprocentowanie: </label>
		<input id="id_z" type="text" name="z" value="<?php out($z) ?>" />
	</fieldset>	
	<input type="submit" value="oblicz" class="pure-button pure-button-primary" />
</form>	

<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
}
}
?>

<?php if (isset($rata)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #add8e6; color: #000; width:300px; font-weight: bold; text-align: center;">
<?php echo 'miesięczna rata wynosi: '.$rata.' zł'; ?>
</div>
<?php } ?>

</body>
</html>