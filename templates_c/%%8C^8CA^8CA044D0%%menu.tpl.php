<?php /* Smarty version 2.6.26, created on 2010-05-04 11:24:24
         compiled from menu.tpl */ ?>
<div class="menu"><a href="index.php">Beiträge ansehen</a><a
	href="index.php?action=entry">Eintrag verfassen</a><?php if ($this->_tpl_vars['admin']): ?><a
	href="admin/index.php">Admin</a><?php endif; ?> <?php if ($this->_tpl_vars['user']): ?><a
	href="index.php?action=logout">Logout</a><?php else: ?><a
	href="index.php?action=login">Login</a><?php endif; ?></div>