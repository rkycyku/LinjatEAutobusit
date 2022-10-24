<?php
include "../../konektimi/connection.php";
$nisja = "";
$mberritja = "";
$kompania = "";
$relacioniFQ = "";
$relacioni = "";
$statusi = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if(!isset($_GET["id"])){
        header("location: ../../index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM linjat WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: ../../../../../index.php");
        exit;
    }

    $nisja = $row["nisja"];
    $mberritja = $row["mberritja"];
    $kompania = $row["kompania"];
    $relacioniFQ = $row["relacioni_fq"];
    $relacioni = $row["relacioni"];
    $statusi = $row["statusi"];
}
else{
    $id = $_POST["id"];
    $nisja = $_POST["nisja"];
    $mberritja = $_POST["mberritja"];
    $kompania = $_POST["kompania"];
    $relacioniFQ = $_POST["relacioniFQ"];
    $relacioni = $_POST["relacioni"];
    $statusi = $_POST["statusi"];

    do{
        if(empty($id) || empty($nisja) || empty($mberritja) || empty($kompania)){
            $errorMessage = "Ju lutem plotesoni te gjitha fushat";
            break;
        }

        $sql = "UPDATE linjat " .
                "SET nisja = '$nisja', mberritja = '$mberritja', kompania = '$kompania', relacioni_fq = '$relacioniFQ', relacioni = '$relacioni', statusi = '$statusi'". 
                "WHERE id = '$id'";

        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalid Query!". $conn->error;
            break;
        }

        $nisja = "";
        $mberritja = "";
        $kompania = "";
        $relacioniFQ = "";
        $relacioni = "";
        $statusi = "";

        $successMessage = "Linja u perditesua me sukses";
        header("Location: ../../../index.php");
        exit;
    }while (false);
}
?>