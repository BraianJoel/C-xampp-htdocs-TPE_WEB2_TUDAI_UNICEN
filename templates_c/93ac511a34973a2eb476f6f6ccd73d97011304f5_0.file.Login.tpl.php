<?php
/* Smarty version 4.3.1, created on 2023-06-20 08:59:38
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64914e5a7208e5_10311417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ac511a34973a2eb476f6f6ccd73d97011304f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\Login.tpl',
      1 => 1687244369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64914e5a7208e5_10311417 (Smarty_Internal_Template $_smarty_tpl) {
?><!--aca ira la autenticacion para que el usuario que  se logee a la feria-->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<h1>
<form class="formulario" action="<?php echo BASE_URL;?>
enviar" method="POST" autocomplete="off">
    <table>
        <tr>
            <td>user: <input type="text" name="user" value="" placeholder="ingrese usuario" /></td>
            <td>password: <input type="password" name="pass" placeholder="ingrese contraseña"/></td>
        </tr>
    </table>
    <button type="submit">Login</button>
</form><?php }
}
