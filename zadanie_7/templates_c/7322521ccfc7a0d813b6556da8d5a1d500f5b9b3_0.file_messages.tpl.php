<?php
/* Smarty version 5.4.2, created on 2025-04-28 12:09:17
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680f53cd399427_52374635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7322521ccfc7a0d813b6556da8d5a1d500f5b9b3' => 
    array (
      0 => 'messages.tpl',
      1 => 1745828622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_680f53cd399427_52374635 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\zadanie_7\\app\\views\\templates';
if (($_smarty_tpl->getValue('messages')->isError())) {?> 
   
   <div id="messages">
       <h4>wystąpiły błędy: </h4>
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
            
            <?php if (($_smarty_tpl->getValue('messages')->isInfo())) {?>
	            <h4>informacje: </h4>
	            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
		            <li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
            </div>
         


<?php }
}
