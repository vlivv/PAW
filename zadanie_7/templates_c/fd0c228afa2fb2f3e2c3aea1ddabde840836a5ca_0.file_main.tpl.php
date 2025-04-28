<?php
/* Smarty version 5.4.2, created on 2025-04-27 15:55:32
  from 'file:templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680e3754a4c0c0_95884615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd0c228afa2fb2f3e2c3aea1ddabde840836a5ca' => 
    array (
      0 => 'templates/main.tpl',
      1 => 1744379372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_680e3754a4c0c0_95884615 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_6b\\app\\views\\templates';
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
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/css/main.css" />
	</head>
	<body class="landing is-preload">
		
                                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1611557105680e3754a4b2d1_92464583', 'content');
?>

                                </section>
                                    

                                   
				<footer id="footer">
					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1033405380680e3754a4bac9_99526943', 'footer');
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
class Block_1611557105680e3754a4b2d1_92464583 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_6b\\app\\views\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1033405380680e3754a4bac9_99526943 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_6b\\app\\views\\templates';
?>
&copy; Untitled. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
}
