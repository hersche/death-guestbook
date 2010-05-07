<?php /* Smarty version 2.6.26, created on 2010-05-04 13:58:54
         compiled from view.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['entrys']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
<table border="2">
	<tr>
		<td style="background-color: green">Title</td>
		<td><?php echo $this->_tpl_vars['entrys'][$this->_sections['id']['index']]->getTitle(); ?>
</td>
		<td style="background-color: green">Timestamp</td>
		<td><?php echo $this->_tpl_vars['entrys'][$this->_sections['id']['index']]->getTimestamp(); ?>
</td>
	</tr>
	<tr>
		<td style="background-color: green">Name</td>
		<td><?php echo $this->_tpl_vars['entrys'][$this->_sections['id']['index']]->getName(); ?>
</td>
	</tr>
	<tr>
		<td style="background-color: green">Text</td>
		<td colspan="3"><?php echo $this->_tpl_vars['entrys'][$this->_sections['id']['index']]->getText(); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['user']): ?>
		<tr>
		<td style="background-color: red"><a href="index.php?action=deleteentry&entryid=<?php echo $this->_tpl_vars['entrys'][$this->_sections['id']['index']]->getId(); ?>
">Löschen</a></td>
	</tr>
	<?php endif; ?>


</table>
<br />
<?php endfor; endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>