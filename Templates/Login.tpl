<!--aca ira la autenticacion para que el usuario que  se logee a la feria-->
{include file="header.tpl"}
<h1>{$titulo}<h1>
<form method="POST">
    <ul>
        <li><label>User: </label></li>
        <li><imput type="text" name="user" value=""/></li>
        <li><label>Password: </label></li>
        <li><imput type="password" name="pass"/></li>
        <li><button type="submit">Login</button></li>
    </ul>
</form>