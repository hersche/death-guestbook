<?php /* Smarty version 2.6.26, created on 2010-05-04 13:17:17
         compiled from entry.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
			<td>Bitte lösen: <?php echo $this->_tpl_vars['question']; ?>
</td>
			<td><input type="text" name="check" value="" /></td>
		</tr>
		<td><input type="submit" value="...und ab damit!" /></td>
	</tr>
	</form>
</table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>