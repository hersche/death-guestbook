<?php /* Smarty version 2.6.26, created on 2010-03-30 12:18:44
         compiled from options_misc.tpl */ ?>
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
<h1>Allowed sites</h1>
<p>This part of the configuration make it possible to allow sites for peoble who didn't got a login. But be carefull!
We use here regular expressions, what could mean: you could enable simple a whole module by giving them a site.
Examples for correct regex:
<ul>
<li>/^forum.php$/ = a single site</li>
<li>'action=showthread&amp;threadid=' = a function or so</li>
</ul>
</p>
<ul>
<?php unset($this->_sections['site']);
$this->_sections['site']['name'] = 'site';
$this->_sections['site']['loop'] = is_array($_loop=$this->_tpl_vars['sites']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['site']['show'] = true;
$this->_sections['site']['max'] = $this->_sections['site']['loop'];
$this->_sections['site']['step'] = 1;
$this->_sections['site']['start'] = $this->_sections['site']['step'] > 0 ? 0 : $this->_sections['site']['loop']-1;
if ($this->_sections['site']['show']) {
    $this->_sections['site']['total'] = $this->_sections['site']['loop'];
    if ($this->_sections['site']['total'] == 0)
        $this->_sections['site']['show'] = false;
} else
    $this->_sections['site']['total'] = 0;
if ($this->_sections['site']['show']):

            for ($this->_sections['site']['index'] = $this->_sections['site']['start'], $this->_sections['site']['iteration'] = 1;
                 $this->_sections['site']['iteration'] <= $this->_sections['site']['total'];
                 $this->_sections['site']['index'] += $this->_sections['site']['step'], $this->_sections['site']['iteration']++):
$this->_sections['site']['rownum'] = $this->_sections['site']['iteration'];
$this->_sections['site']['index_prev'] = $this->_sections['site']['index'] - $this->_sections['site']['step'];
$this->_sections['site']['index_next'] = $this->_sections['site']['index'] + $this->_sections['site']['step'];
$this->_sections['site']['first']      = ($this->_sections['site']['iteration'] == 1);
$this->_sections['site']['last']       = ($this->_sections['site']['iteration'] == $this->_sections['site']['total']);
?>

<li>
<form action="options.php?action=editAllowedSite&siteid=<?php echo $this->_tpl_vars['sites'][$this->_sections['site']['index']]->getId(); ?>
" method="post">
            <input type="text" name="site" value="<?php echo $this->_tpl_vars['sites'][$this->_sections['site']['index']]->getName(); ?>
">
            
        <input type="submit" value="Edit now!" /></form> <a href="options.php?action=deleteAllowedSite&siteid=<?php echo $this->_tpl_vars['sites'][$this->_sections['site']['index']]->getId(); ?>
">Delete Site</a></li>

<?php endfor; endif; ?>
</ul>
<form action="options.php?action=createAllowedSite" method="post">
<table>
	<tr>
		<td>Site-regex:</td>
		<td><input TYPE="text" SIZE="40" NAME="site" /></td>
	</tr>
		<tr>
		<td><input type="submit" value="Add now!" />
	
	</tr>
</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>