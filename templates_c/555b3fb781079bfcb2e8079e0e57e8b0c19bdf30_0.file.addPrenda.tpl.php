<?php
/* Smarty version 4.3.1, created on 2023-06-21 03:10:12
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\addPrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64924df4eea637_43192352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '555b3fb781079bfcb2e8079e0e57e8b0c19bdf30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\addPrenda.tpl',
      1 => 1687309809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64924df4eea637_43192352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='addPrenda'  method='post'>
    <input type='text' name='nombre' placeholder="nombre"/>
    <input type='text' name='descripcion' placeholder="descripcion"/>
    <input type='text' name='precio' placeholder="precio"/>
    
    <input type='submit' value="SUBMIT">
</form>
<?php }
}
