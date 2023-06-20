<!--aca ira la autenticacion para que el usuario que  se logee a la feria-->
{include file="header.tpl"}
<h1>{$titulo}<h1>
<form class="formulario" action="{BASE_URL}enviar" method="POST" autocomplete="off">
    <table>
        <tr>
            <td>user: <input type="text" name="user" value="" placeholder="ingrese usuario" /></td>
            <td>password: <input type="password" name="pass" placeholder="ingrese contraseña"/></td>
        </tr>
    </table>
    <button type="submit">Login</button>
</form>