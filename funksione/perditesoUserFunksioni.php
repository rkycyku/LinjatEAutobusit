<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include "connection.php";

$emri = "";
$mbiemri = "";
$username = "";
$aksesi = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if(!isset($_GET["id"])){
        header("location: ./index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM user WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: ./index.php");
        exit;
    }

    $username = $row["username"];
    $emri = $row["emri"];
    $mbiemri = $row["mbiemri"];
    $aksesi = $row["aksesi"];
}
else{
    $id = $_POST["id"];
    $username = $_POST["username"];
    $emri = $_POST["emri"];
    $mbiemri = $_POST["mbiemri"];
    $aksesi = $_POST["aksesi"];

    do{
        if(empty($id) || empty($username) || empty($emri) || empty($mbiemri)){
            $errorMessage = "Ju lutem plotesoni te gjitha fushat";
            break;
        }
        if ($stmt = $conn->prepare('SELECT id, password, aksesi, emri, mbiemri FROM user WHERE username = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etj), hashoj password-in duke perdorur funksionin password_hash.
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            $stmt->store_result();
            // Ruajm rezultatin qe te verifikojme se a egziston perdoruesi ne databaze
            if ($stmt->num_rows > 0) {
                // Username ekziston!
                
                $_SESSION["UserNSame"] = TRUE;
                
                header("location: ./perditesoUser.php?id=$id");
            }else{
                $sql = "UPDATE user " .
                "SET emri = '$emri', mbiemri = '$mbiemri', username = '$username', aksesi = '$aksesi'". 
                "WHERE id = '$id'";

                $result = $conn->query($sql);

                if(!$result){
                    $errorMessage = "Invalid Query!". $conn->error;
                    break;
                }

                $emri = "";
                $mbiemri = "";
                $username = "";
                $aksesi = "";

                $_SESSION['suksesPerditsimi'] = TRUE;
                header("Location: ./admin.php");
                exit;
            }
        }
    }
    while (false);
}
?>