<?php
/* Smarty version 4.3.1, created on 2023-06-21 04:31:38
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492610ad2e5d1_35295501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e5771653b92ce829d2e4a8ef9f6d9327c9219b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\header.tpl',
      1 => 1687314690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492610ad2e5d1_35295501 (Smarty_Internal_Template $_smarty_tpl) {
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
