<?php
/* Smarty version 4.3.1, created on 2023-06-21 05:01:17
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649267fde58f86_14277554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed192211cf03d1e5bccdf5760eafb656d146274' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\templates\\main.tpl',
      1 => 1687314690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649267fde58f86_14277554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
<body>
	<a href='<?php echo BASE_URL;?>
login'>Login</a>
	<a href='<?php echo BASE_URL;?>
prendas'>Prendas</a>
	<a href='<?php echo BASE_URL;?>
insertar'>Añadir prenda</a>
    <a href='<?php echo BASE_URL;?>
obtener'>Obtener prenda</a>
    <a href='<?php echo BASE_URL;?>
modificar'>Actualizar prenda</a>
    <a href='<?php echo BASE_URL;?>
eliminar'>Eliminar prenda</a>
	<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1><?php }
}
