<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/kalkredyt.php" method="get">
	<label for="id_x">kwota: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /><br />
	<label for="id_y">lata: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br />
	<label for="id_z">oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset($z)) print($z); ?>" /><br />
	<input type="submit" value="oblicz" />
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