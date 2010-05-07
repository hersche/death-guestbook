{include file="header.tpl"} {include file="menu.tpl"}
<table>
	<form method="POST" action="index.php?action=login">
	<tr>
		<td>Benutzername</td>
		<td><input type="text" name="username" /></td>
	</tr>
	<tr>
		<td>Passwort</td>
		<td><input type="password" name="password" /></td>
	</tr>
	<tr>
		<td><input type="submit" value="Login" /></td>
	</tr>


	</form>
</table>
 {include file="footer.tpl"}
