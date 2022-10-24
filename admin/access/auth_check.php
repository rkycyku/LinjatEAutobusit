<?php
session_start();
if ($_SESSION['aksesi'] != 'admin' || $_SESSION['aksesi'] != 'editor') {
	header('Location: ../../design/error/403.php');
	exit;
}
?>