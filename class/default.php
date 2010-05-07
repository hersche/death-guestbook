<?php
require_once 'config.php';
require_once 'class/user.php';
require_once 'class/smarty/Smarty.class.php';

$template = new Smarty();
session_start();
try
{
	$connection = new PDO($GLOBALS["db_type"].':dbname='.$GLOBALS["db_dbname"].';host='.$GLOBALS["db_host"].'', $GLOBALS["db_loginname"], $GLOBALS["db_loginpassword"]);
}
catch (PDOException $e)
{
	echo $e->getMessage();
}
if((isset($_SESSION["user"]))&&(usertools::containRoles($GLOBALS["adminRoles"], $_SESSION["user"]->getRoles()))){
	$template->assign("admin", true);
}
if(isset($_SESSION['user'])){
	$template->assign("user", true);
}
$user = $_SESSION["user"];


?>