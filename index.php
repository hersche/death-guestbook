<?php
require_once 'class/default.php';
require_once 'class/entryDataObject.php';
function generateQuestion(){
	$firstNr = rand(1,10);
	$secondNr = rand(1,10);
	$plusMinus = rand(1,2);
	if($plusMinus==1){
		$_SESSION['answer'] = $firstNr + $secondNr;
		return strval($firstNr)."+".strval($secondNr);
	}
	else{
		$_SESSION['answer'] = $firstNr - $secondNr;
		return strval($firstNr)."-".strval($secondNr);
	}

}
switch($_GET['action']){
	case "entry":
		$template->assign("question", generateQuestion());
		$template->display('entry.tpl');
		break;

	case "login":
		if((!empty($_POST['username']))&&(!empty($_POST['password']))){
			$user = new user($_POST['username'], $_POST['password'], $connection);
			if((isset($_SESSION["user"]))&&($user->isValid())){
				header("Location: index.php");
			}
		}
		$template->display('login.tpl');

		break;
	case "logout":
		$user->logout();
		header("Location: index.php");
		break;
	case "saveentry":
		echo $_SESSION['answer'];
		if((!empty($_POST['name']))&&(!empty($_POST['text']))&&(!empty($_POST['title']))&&(!empty($_POST['check']))&&($_POST['check']==$_SESSION['answer']) ){
			$connection->exec("INSERT INTO entry (`name`,`title`, `text`) VALUES ('".$_POST['name']."', '".$_POST['title']."', '".$_POST['text']."');");
		}
		header("Location: index.php");
		break;

	case "deleteentry":
		if ((isset($_GET['entryid']))&&(isset($_SESSION['user']))){
			$connection->exec("DELETE FROM `".$GLOBALS["db_dbname"]."`.`entry` WHERE `entry`.`id` = ".$_GET['entryid']."; ");
			header("Location: index.php");
		}
		else{
			echo "don't try to hack!";
		}

		break;
	default:
		$allEdo = new allEdo($connection);
		$template->assign("entrys", $allEdo->getAllEdos());
		$template->display('view.tpl');
		break;
}
?>