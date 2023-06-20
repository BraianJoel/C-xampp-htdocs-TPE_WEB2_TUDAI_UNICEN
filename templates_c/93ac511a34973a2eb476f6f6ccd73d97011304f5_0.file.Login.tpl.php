<?php
/* Smarty version 4.3.1, created on 2023-06-19 23:18:18
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6490c61a6468e0_86139113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ac511a34973a2eb476f6f6ccd73d97011304f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\Login.tpl',
      1 => 1687209490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6490c61a6468e0_86139113 (Smarty_Internal_Template $_smarty_tpl) {
?><!--aca ira la autenticacion para que el usuario que  se logee a la feria-->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<h1>
<form method="POST">
    <ul>
        <li><label>User: </label></li>
        <li><imput type="text" name="user" value=""/></li>
        <li><label>Password: </label></li>
        <li><imput type="password" name="pass"/></li>
        <li><button type="submit">Login</button></li>
    </ul>
</form><?php }
}
