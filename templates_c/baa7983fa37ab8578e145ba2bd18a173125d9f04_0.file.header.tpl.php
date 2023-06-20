<?php
/* Smarty version 4.3.1, created on 2023-06-20 23:17:41
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492177569c567_00212577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa7983fa37ab8578e145ba2bd18a173125d9f04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\templates\\header.tpl',
      1 => 1687295857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492177569c567_00212577 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<h1>$prendas}</h1> aca ira el nav-->

<!--<table>
	foreach from=$categorias item=nombre_categoria}
	<tbody>
		<tr>
			<td>$nombre_categoria->prenda}</td> <-- años60',70', 80',90'-->
			<!--<td><a href="$BASE_URL}producto/detalle/<$nombre_categoria->prenda->ID} ">Ver mas/a></td>--> <!--lista por categoria-->              <!--Es una cosntante que tiene la Urle base, que siempre me redirige al home que es la principal en este-->
																			                                                    <!--ejemplo puede barra ver mas en la url-->

        <!--</tr>-->
	<!--</tbody>-->
    <!--/foreach-->
<!--</table>-->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
		<table border="1px">
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prendas']->value, 'prenda');
$_smarty_tpl->tpl_vars['prenda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prenda']->value) {
$_smarty_tpl->tpl_vars['prenda']->do_else = false;
?>
				<tr>
					<td><h1><?php echo $_smarty_tpl->tpl_vars['prenda']->value->nombre;?>
</h1></td>
				</tr>
				<tr>
					<td><h3><?php echo $_smarty_tpl->tpl_vars['prenda']->value->img;?>
</h3></td>
					<td><h3><?php echo $_smarty_tpl->tpl_vars['prenda']->value->descripcion;?>
</h3></td>
					<td><h3>Precio: $  <?php echo $_smarty_tpl->tpl_vars['prenda']->value->Precio;?>
</h3></td>
				<tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</body>
</html>


<?php }
}
