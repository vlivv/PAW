<?php
/* Smarty version 5.4.2, created on 2025-03-31 02:00:20
  from 'file:C:\xampp\htdocs\zadanie_4/app/kalkredyt.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e9db14954791_25285288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ba0a996ca2e018fbf6717904bd2a6a3ab6b251' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie_4/app/kalkredyt.html',
      1 => 1743379172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e9db14954791_25285288 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_4\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12354042867e9db14945f20_83907479', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_152770856067e9db14948873_66193903', 'content');
?>

	
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ($_smarty_tpl->getValue('conf')->root_path).("/templates/main.html"), $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_12354042867e9db14945f20_83907479 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_4\\app';
?>
&copy; Untitled. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_152770856067e9db14948873_66193903 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_4\\app';
?>



					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz miesięczną ratę.</p>

					<form action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/kalkredyt.php" method="post">
                                            <fieldset>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="text" name="x" id="id_x" placeholder="kwota" value="<?php echo $_smarty_tpl->getValue('form')->x;?>
" />
                                                                <br>
                                                                <input type="text" name="y" id="id_y" placeholder="lata" value="<?php echo $_smarty_tpl->getValue('form')->y;?>
" />
                                                                <br>
                                                                <input type="text" name="z" id="id_z" placeholder="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')->z;?>
" />
							</div>
							<div class="col-4 col-12-mobilep">
                                                            <br><br><br>
                                                            <button type="submit" class="button">oblicz</button>
							</div>
						</div>
                                            </fieldset>
					</form>
                                        <br>

				

                                
<div id="result">   
<?php if (($_smarty_tpl->getValue('messages')->isError())) {?>
    <h4>wystąpiły błędy:</h4>
    
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getErrors(), 'msg');
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


<?php if ((null !== ($_smarty_tpl->getValue('rata') ?? null))) {?>
                                                                                               
<h4>miesięczna rata wynosi: <?php echo $_smarty_tpl->getValue('rata');?>
 </h4>
										
<?php }?>

 </div>                                
                           
<?php
}
}
/* {/block 'content'} */
}
