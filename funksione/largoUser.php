<?php 
    include './auth_check_admin.php';
    include './connection.php';

    $id = $_GET["id"];
    $aksesi = $_GET["aksesi"];
    if($aksesi == 'founder'){
        $_SESSION["error"] = TRUE;
        header("location: ../admin.php");
    }else{
        $sql = "DELETE FROM user WHERE id = $id";
        $conn->query($sql);
        $result = $conn->query($sql);

        $_SESSION["sukses"] = TRUE;
        header("location: ../admin.php");
    }