<?php /* Smarty version 2.6.26, created on 2010-05-04 13:10:32
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>