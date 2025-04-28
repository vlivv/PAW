{extends file="main.tpl"}

{block name=content}



<section id="banner">
    <section id="cta">
<form action="{$conf->action_url}/app/security/login.php" method="post">
	<legend>logowanie</legend>
        <br>
	<fieldset>
		<div class="row gtr-50 gtr-uniform">
		<div class="col-8 col-12-mobilep">
                    <input id="id_login" type="text" name="login"   value="{$form->login}" placeholder="login"/>
                    <br>
                    <input id="id_pass" type="password" name="pass"  value="{$form->pass}" placeholder="hasło" />
                </div>
	<div class="col-4 col-12-mobilep">
            <br><br>
        <button type="submit" class="button">zaloguj</button>
        </div>
                </div>
        </fieldset>
</form>	
 <br>


   

{include file='messages.tpl'}

</div>
</section>
</section>




{/block}
