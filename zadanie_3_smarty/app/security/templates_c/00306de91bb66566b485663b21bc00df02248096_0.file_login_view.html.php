<?php
/* Smarty version 5.4.2, created on 2025-03-28 19:52:21
  from 'file:C:\xampp\htdocs\zadaniesmarty/app/security/login_view.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e6efe562c134_92310012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00306de91bb66566b485663b21bc00df02248096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaniesmarty/app/security/login_view.html',
      1 => 1743187939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e6efe562c134_92310012 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app\\security';
?><!DOCTYPE HTML>
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
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/main.css" />
	</head>
        <body>


<section id="banner">
    <section id="cta">
<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/login.php" method="post">
	<legend>logowanie</legend>
        <br>
	<fieldset>
		<div class="row gtr-50 gtr-uniform">
		<div class="col-8 col-12-mobilep">
                    <input id="id_login" type="text" name="login" placeholder="login" value="<?php echo $_smarty_tpl->getValue('form')['login'];?>
" />
                    <input id="id_pass" type="password" name="pass" placeholder="hasło" />
                </div>
	<div class="col-4 col-12-mobilep">
        <button type="submit" class="button">zaloguj</button>
        </div>
                </div>
        </fieldset>
</form>	
 <br>


    
<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
    <h4>wystąpiły błędy:</h4>
    
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                 <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
               
    
<?php }?>

</div>
</section>
</section>
</body>
</html><?php }
}
