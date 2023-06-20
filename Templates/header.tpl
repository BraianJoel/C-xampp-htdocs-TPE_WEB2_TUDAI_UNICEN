<!--<h1>$prendas}</h1> aca ira el nav-->

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
        <title>Tienda de Ropa</title>
    </head>
    <body>
        <!--<form>
			<select>
				foreach from=$prendas item=prenda}
					<option value="$prenda->ID}">$prenda->prendas_ID}</option>
				/foreach}
			</select>
		</form>-->
	<table border="1px">
		<tbody>
		{foreach from=$prendas item=prenda}
			<tr>
				<td><h1>{$prenda->nombre}</h1></td>
			</tr>
			<tr>
				<td><h3>{$prenda->img}</h3></td>
				<td><h3>{$prenda->descripcion}</h3></td>
				<td><h3>Precio: $  {$prenda->Precio}</h3></td>
			<tr>
		{/foreach}
		</tbody>
	</table>
</html>


