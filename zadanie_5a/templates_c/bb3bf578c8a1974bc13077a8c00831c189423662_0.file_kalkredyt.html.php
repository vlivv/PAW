<?php
/* Smarty version 5.4.2, created on 2025-04-01 20:13:58
  from 'file:kalkredyt.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67ec2ce6d99c29_89018737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3bf578c8a1974bc13077a8c00831c189423662' => 
    array (
      0 => 'kalkredyt.html',
      1 => 1743491876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ec2ce6d99c29_89018737 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_5a\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_211667620767ec2ce6d74da9_66901039', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_214715510267ec2ce6d7a347_12147847', 'content');
?>

	
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_211667620767ec2ce6d74da9_66901039 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_5a\\app\\views';
?>
&copy; Untitled. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_214715510267ec2ce6d7a347_12147847 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_5a\\app\\views';
?>



					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz miesięczną ratę.</p>

					<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post">
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
