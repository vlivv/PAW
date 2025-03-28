<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>logowanie</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="{$app_url}/css/main.css" />
	</head>
        <body>


<section id="banner">
    <section id="cta">
<form action="{$app_url}/app/security/login.php" method="post">
	<legend>logowanie</legend>
        <br>
	<fieldset>
		<div class="row gtr-50 gtr-uniform">
		<div class="col-8 col-12-mobilep">
                    <input id="id_login" type="text" name="login" placeholder="login" value="{$form['login']}" />
                    <input id="id_pass" type="password" name="pass" placeholder="hasło" />
                </div>
	<div class="col-4 col-12-mobilep">
        <button type="submit" class="button">zaloguj</button>
        </div>
                </div>
        </fieldset>
</form>	
 <br>


    
{if isset($messages) && count($messages) > 0}
    <h3>wystąpiły błędy:</h3>
    <ul>
    {foreach  $messages as $msg}
                 {strip}
		
			<li>{$msg}</li>
		{/strip}
		{/foreach}
                </ul>
    
{/if}

</div>
</section>
</section>
</body>
</html>