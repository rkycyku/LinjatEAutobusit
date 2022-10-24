<?php 
session_start();


include '../../konektimi/connection.php';

if ($_SESSION['aksesi'] != 'admin' && $_SESSION['aksesi'] != "founder") {
	header('Location: ../../../design/error/403.php');
	exit;
}



if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM linjat WHERE id = $id";
    $conn->query($sql);

    $successMessage = "Linja u perditesua me sukses";

    header("Location:  " . $_SESSION['faqja']);
    $_SESSION["sukses"] = TRUE;
}
?>