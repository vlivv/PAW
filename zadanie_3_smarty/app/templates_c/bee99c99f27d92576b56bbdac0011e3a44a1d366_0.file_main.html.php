<?php
/* Smarty version 5.4.2, created on 2025-03-28 20:04:58
  from 'file:C:\xampp\htdocs\zadaniesmarty\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e6f2da8c6476_60569684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee99c99f27d92576b56bbdac0011e3a44a1d366' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaniesmarty\\app\\../templates/main.html',
      1 => 1743188621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e6f2da8c6476_60569684 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
            
                <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">


				<header id="header" class="alt">
					<h1><a href="index.php">Kalkulator</a> kredytowy</h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/index.php">Home</a></li>
						
							<li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/login.php" class="button">Zaloguj się</a></li>
						</ul>
					</nav>
				</header>


				<section id="banner">
					<h2>Kalkulator</h2>
					<p><?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
					<ul class="actions special">
						<li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/login.php" class="button primary">Zaloguj się</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/Kalkulator" class="button">Dowiedz się więcej</a></li>
					</ul>
				</section>


				<section id="cta">
                                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_28814990867e6f2da8c4cc6_05569467', 'content');
?>

                                </section>
                                    

                                   
				<footer id="footer">
					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_204586297267e6f2da8c5e16_05932616', 'footer');
?>


				</footer>

		</div>
            
			<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_28814990867e6f2da8c4cc6_05569467 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_204586297267e6f2da8c5e16_05932616 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\templates';
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
