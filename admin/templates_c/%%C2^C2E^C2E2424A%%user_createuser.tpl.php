<?php /* Smarty version 2.6.26, created on 2010-02-23 14:16:55
         compiled from user_createuser.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => 'Usermanagement')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "messagebox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="user.php?action=mkuser" method="post">
<table>
	<tr>
		<td>Name:</td>
		<td><input TYPE="text" SIZE="40" NAME="name" /></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input TYPE="text" SIZE="40" NAME="username" />
		</td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input TYPE="password" SIZE="40" NAME="password" /></td>
	</tr>
	<tr>
		<td>Password validation:</td>
		<td><input TYPE="password" SIZE="40" NAME="password2" /></td>
	</tr>
	<tr>
		<td>Userrole:</td>
		<td><select name="role" size="1">
			<?php unset($this->_sections['role']);
$this->_sections['role']['name'] = 'role';
$this->_sections['role']['loop'] = is_array($_loop=$this->_tpl_vars['roles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role']['show'] = true;
$this->_sections['role']['max'] = $this->_sections['role']['loop'];
$this->_sections['role']['step'] = 1;
$this->_sections['role']['start'] = $this->_sections['role']['step'] > 0 ? 0 : $this->_sections['role']['loop']-1;
if ($this->_sections['role']['show']) {
    $this->_sections['role']['total'] = $this->_sections['role']['loop'];
    if ($this->_sections['role']['total'] == 0)
        $this->_sections['role']['show'] = false;
} else
    $this->_sections['role']['total'] = 0;
if ($this->_sections['role']['show']):

            for ($this->_sections['role']['index'] = $this->_sections['role']['start'], $this->_sections['role']['iteration'] = 1;
                 $this->_sections['role']['iteration'] <= $this->_sections['role']['total'];
                 $this->_sections['role']['index'] += $this->_sections['role']['step'], $this->_sections['role']['iteration']++):
$this->_sections['role']['rownum'] = $this->_sections['role']['iteration'];
$this->_sections['role']['index_prev'] = $this->_sections['role']['index'] - $this->_sections['role']['step'];
$this->_sections['role']['index_next'] = $this->_sections['role']['index'] + $this->_sections['role']['step'];
$this->_sections['role']['first']      = ($this->_sections['role']['iteration'] == 1);
$this->_sections['role']['last']       = ($this->_sections['role']['iteration'] == $this->_sections['role']['total']);
?>
			<option><?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]; ?>
</option>
			<?php endfor; endif; ?>
		</select>
	
	</tr>
	<tr>
		<td><input type="submit" value="Create now!" />
	
	</tr>
</table>

</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>