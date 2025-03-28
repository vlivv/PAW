<?php
/* Smarty version 5.4.2, created on 2025-03-28 19:52:48
  from 'file:C:\xampp\htdocs\zadaniesmarty/app/kalkredyt.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e6f000b25a14_94238865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f0fd1bebc330c15c5a329f76b2da56618313c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaniesmarty/app/kalkredyt.html',
      1 => 1743187963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e6f000b25a14_94238865 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_190855617967e6f000b162a3_60771177', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_108636784867e6f000b18d81_38344177', 'content');
?>

	
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_190855617967e6f000b162a3_60771177 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_108636784867e6f000b18d81_38344177 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app';
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
 <!-- nie wyswietla bledow cholera wie czm  -->   


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
