<?php
/* Smarty version 5.4.2, created on 2025-03-28 20:06:18
  from 'file:C:\xampp\htdocs\zadanie_3_smarty/app/kalkredyt.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e6f32a5b2009_49424337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac62fd2da26bffa185644ccd37d1431ea732e755' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie_3_smarty/app/kalkredyt.html',
      1 => 1743188456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e6f32a5b2009_49424337 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_3_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_54676507567e6f32a5a2bb8_76622065', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_30393377067e6f32a5a5677_47938802', 'content');
?>

	
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_54676507567e6f32a5a2bb8_76622065 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_3_smarty\\app';
?>
&copy; Untitled. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_30393377067e6f32a5a5677_47938802 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_3_smarty\\app';
?>



					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz miesięczną ratę.</p>

					<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/kalkredyt.php" method="post">
                                            <fieldset>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="text" name="x" id="id_x" placeholder="kwota" value="<?php echo $_smarty_tpl->getValue('form')['x'];?>
" />
                                                                <input type="text" name="y" id="id_y" placeholder="lata" value="<?php echo $_smarty_tpl->getValue('form')['y'];?>
" />
                                                                <input type="text" name="z" id="id_z" placeholder="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')['z'];?>
" />
							</div>
							<div class="col-4 col-12-mobilep">
                                                            <button type="submit" class="button">oblicz</button>
							</div>
						</div>
                                            </fieldset>
					</form>
                                        <br>

				

                                
<div id="result">   
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
