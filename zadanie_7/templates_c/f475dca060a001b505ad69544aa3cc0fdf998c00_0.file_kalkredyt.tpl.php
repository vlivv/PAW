<?php
/* Smarty version 5.4.2, created on 2025-04-28 12:09:17
  from 'file:kalkredyt.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680f53cd19a1c4_03330388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f475dca060a001b505ad69544aa3cc0fdf998c00' => 
    array (
      0 => 'kalkredyt.tpl',
      1 => 1745828648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_680f53cd19a1c4_03330388 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2128059812680f53ccf0fed6_42273402', 'content');
?>

	
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_2128059812680f53ccf0fed6_42273402 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views';
?>

    
    
    
    
<div id="page-wrapper">

				<header id="header" class="alt">
					<h1><a href="index.php">Kalkulator</a> kredytowy</h1>
					<nav id="nav">
						<ul>
                                                    
							<li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/index.php">Home</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout" class="button">Wyloguj się</a></li>
						
						</ul>
					</nav>
				</header>


				<section id="banner">
					<h2>Kalkulator</h2>
					<p><?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
					<ul class="actions special">
						<li><a href="https://pl.wikipedia.org/wiki/Kalkulator" class="button">Dowiedz się więcej</a></li>
                                                <li>
    <?php if ($_smarty_tpl->getValue('user')->role == "admin") {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
results" class="button">Baza</a>
    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
results#messages" class="button">Baza</a>
    <?php }?>
</li>
                                          
					</ul>
				</section>


				<section id="cta">

					<h2>Kalkulator kredytowy</h2>
                                        <p>użytkownik: <?php echo $_smarty_tpl->getValue('user')->login;?>
, rola: <?php echo $_smarty_tpl->getValue('user')->role;?>
</p>
					<p>Oblicz miesięczną ratę.</p>

					<form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
kalkCompute" method="post">
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
                                               <br>
                                                 
                                            </fieldset>
					</form>
                                        <br>

				             
<div id="result">   
    

    <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

  <?php if ((null !== ($_smarty_tpl->getValue('rata')->rata ?? null))) {?>
    <h4>miesięczna rata wynosi: <?php echo $_smarty_tpl->getValue('rata')->rata;?>
</h4>
<?php }?>

</div>
  </section>                                                                   
<?php
}
}
/* {/block 'content'} */
}
