<?php
session_start();
if ($_SESSION['aksesi'] != 'admin' && $_SESSION['aksesi'] != "founder") {
	header('Location: ../../design/error/403.php');
	exit;
}else{
	$_SESSION['aksesi'] == 'admin';
}
?>