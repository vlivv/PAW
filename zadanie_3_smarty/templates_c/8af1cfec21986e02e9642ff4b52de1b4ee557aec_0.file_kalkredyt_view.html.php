<?php
/* Smarty version 5.4.2, created on 2025-03-27 22:47:18
  from 'file:C:\xampp\htdocs\zadaniesmarty/app/kalkredyt_view.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e5c7667dae96_31676351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8af1cfec21986e02e9642ff4b52de1b4ee557aec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaniesmarty/app/kalkredyt_view.html',
      1 => 1743112036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e5c7667dae96_31676351 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20430774867e5c7667cf580_11165909', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_53547082667e5c7667d2e44_36923238', 'content');
?>

	
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_20430774867e5c7667cf580_11165909 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_53547082667e5c7667d2e44_36923238 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadaniesmarty\\app';
?>



					<h2>Kalkulator kredytowy</h2>
					<p>Oblicz miesięczną ratę.</p>

					<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/kalkredyt.php#result" method="post">
                                            <fieldset>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-8 col-12-mobilep">
								<input type="text" name="x" id="id_x" placeholder="kwota" value="$form['x']" />
                                                                <input type="text" name="y" id="id_y" placeholder="lata" value="$form['y']" />
                                                                <input type="text" name="z" id="id_z" placeholder="oprocentowanie" value="$form['z']" />
							</div>
							<div class="col-4 col-12-mobilep">
                                                            <button type="submit" class="button">oblicz</button>
							</div>
						</div>
                                            </fieldset>
					</form>
                                        <br>

				
<div id="result">  
                                
     

      
<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
        
		echo '<h4>wystąpiły błędy: </h4>';
               
		foreach ( $messages as $key => $msg ) {
			<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		}
                <?php }?>
		
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
