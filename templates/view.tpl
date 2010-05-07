{include file="header.tpl"}
{include file="menu.tpl"}
{section name=id loop=$entrys}
<table border="2">
	<tr>
		<td style="background-color: green">Title</td>
		<td>{$entrys[id]->getTitle()}</td>
		<td style="background-color: green">Timestamp</td>
		<td>{$entrys[id]->getTimestamp()}</td>
	</tr>
	<tr>
		<td style="background-color: green">Name</td>
		<td>{$entrys[id]->getName()}</td>
	</tr>
	<tr>
		<td style="background-color: green">Text</td>
		<td colspan="3">{$entrys[id]->getText()}</td>
	</tr>
	{if $user}
		<tr>
		<td style="background-color: red"><a href="index.php?action=deleteentry&entryid={$entrys[id]->getId()}">Löschen</a></td>
	</tr>
	{/if}


</table>
<br />
{/section}

{include file="footer.tpl"}