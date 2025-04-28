<?php
/* Smarty version 5.4.2, created on 2025-04-28 12:09:30
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680f53da8e6908_27437573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f879c28e5412aef099f522adf77a8cc89fe29cf6' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1744653936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_680f53da8e6908_27437573 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1437761539680f53da8e0923_03779855', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1437761539680f53da8e0923_03779855 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views';
?>




<section id="banner">
    <section id="cta">
<form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
/app/security/login.php" method="post">
	<legend>logowanie</legend>
        <br>
	<fieldset>
		<div class="row gtr-50 gtr-uniform">
		<div class="col-8 col-12-mobilep">
                    <input id="id_login" type="text" name="login"   value="<?php echo $_smarty_tpl->getValue('form')->login;?>
" placeholder="login"/>
                    <br>
                    <input id="id_pass" type="password" name="pass"  value="<?php echo $_smarty_tpl->getValue('form')->pass;?>
" placeholder="hasło" />
                </div>
	<div class="col-4 col-12-mobilep">
            <br><br>
        <button type="submit" class="button">zaloguj</button>
        </div>
                </div>
        </fieldset>
</form>	
 <br>


   

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</div>
</section>
</section>




<?php
}
}
/* {/block 'content'} */
}
