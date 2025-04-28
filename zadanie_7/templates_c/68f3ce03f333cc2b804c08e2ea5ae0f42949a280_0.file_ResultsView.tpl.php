<?php
/* Smarty version 5.4.2, created on 2025-04-28 12:11:19
  from 'file:ResultsView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680f5447d9fba9_26751107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f3ce03f333cc2b804c08e2ea5ae0f42949a280' => 
    array (
      0 => 'ResultsView.tpl',
      1 => 1745832164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_680f5447d9fba9_26751107 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1839445788680f5447d92f34_86465362', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1839445788680f5447d92f34_86465362 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views';
?>

<div id="page-wrapper">
    <header id="header" class="alt">
        <h1><a href="index.php">Wyniki</a></h1>
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
        <div style="text-align: center;">
            <div class="row gtr-50 gtr-uniform" style="justify-content: center;">
                <div class="col-10 col-12-mobilep">
                    <br>

                    <table class="result-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kwota</th>
                                <th>Oprocentowanie (%)</th>
                                <th>Lata</th>
                                <th>Rata</th>
                                <th>Data</th>
                                <th>Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('records'), 'r');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r')->value) {
$foreach0DoElse = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getValue('r')['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('r')['kwota'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('r')['oprocentowanie'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('r')['lata'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('r')['rata'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('r')['data'];?>
</td>
                                    <td>
                                        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
delete" method="post" onsubmit="return confirm('Czy na pewno chcesz usunąć ten rekord?');">
                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('r')['id'];?>
" />
                                            <button type="submit" class="button small">Usuń</button>
                                        </form>
                                    </td>
                                </tr>
                                
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
                        
                     


            <br><br>
            <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    </section>
</div>
<?php
}
}
/* {/block 'content'} */
}
