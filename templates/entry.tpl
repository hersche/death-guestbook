{include file="header.tpl"} {include file="menu.tpl"}
<div class="content">
<table>
	<form action="index.php?action=saveentry" method="post">
	<tr>
		<td>Titel</td>
		<td><input type="text" name="title" value="" /></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="" /></td>
	</tr>
	<tr>
		<td>Text</td>
		<td>
		<div style="border: 1px solid #ccc; background-color: yellow;"><textarea dojoType="dijit.Editor"
			styleSheets="dojo/dojo/resources/dojo.css" name="text">
  </textarea></div>
		</td>
	</tr>
	<tr>
		<tr>
			<td>Bitte lösen: {$question}</td>
			<td><input type="text" name="check" value="" /></td>
		</tr>
		<td><input type="submit" value="...und ab damit!" /></td>
	</tr>
	</form>
</table>
</div>
{include file="footer.tpl"}
