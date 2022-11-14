<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


include './connection.php';

include './auth_check_admin.php';



if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM linjat WHERE id = $id";
    $conn->query($sql);

    $successMessage = "Linja u perditesua me sukses";

    header("Location:  " . $_SESSION['faqja']);
    $_SESSION["sukses"] = TRUE;
}
?>