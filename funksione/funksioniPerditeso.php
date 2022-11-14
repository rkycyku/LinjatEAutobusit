<?php
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
include "connection.php";

$nisja = "";
$mberritja = "";
$kompania = "";
$relacioni = "";
$shenimeShtes = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if(!isset($_GET["id"])){
        header("location: ./index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM linjat WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: ../index.php");
        exit;
    }

    $nisja = $row["nisja"];
    $mberritja = $row["mberritja"];
    $kompania = $row["kompania"];
    $relacioni = $row["relacioni"];
    $shenimeShtes = $row["shenimeShtes"];
}
else{
    $id = $_POST["id"];
    $nisja = $_POST["nisja"];
    $mberritja = $_POST["mberritja"];
    $kompania = $_POST["kompania"];
    $relacioni = $_POST["relacioni"];
    $shenimeShtes = $_POST["shenimeShtes"];

    do{
        if(empty($id) || empty($nisja) || empty($mberritja) || empty($kompania)){
            $errorMessage = "Ju lutem plotesoni te gjitha fushat";
            break;
        }

        $sql = "UPDATE linjat " .
                "SET nisja = '$nisja', mberritja = '$mberritja', kompania = '$kompania', relacioni = '$relacioni', shenimeShtes = '$shenimeShtes'". 
                "WHERE id = '$id'";

        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Probleme me Query!". $conn->error;
            break;
        }

        $nisja = "";
        $mberritja = "";
        $kompania = "";
        $relacioni = "";
        $shenimeShtes = "";

        $successMessage = "Linja u perditesua me sukses";
        header("Location: " . $_SESSION['faqja']);
        $_SESSION["perditsimiMeSukseses"] = TRUE;
    }while (false);
}
?>