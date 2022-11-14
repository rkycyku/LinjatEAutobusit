<?php include './funksione/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat e Autobusit | Kaçanik - Ferizaj</title>
</head>

<body>

    <div class="container">
        <?php include './design/header.php'; ?>
        <h2>Linja | Kaçanik - Ferizaj</h2>
        <br>
        <?php
            if(isset($_SESSION["error"])){
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                <strong class="mx-2">Ndodhi nje gabim!</strong>
                                    Perdoruesi nuk mund te fshihet pasi eshte founder.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }
            if(isset($_SESSION["sukses"])){
                echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <strong class="mx-2">Me sukses!</strong>
                                    Perdoruesi u fshi me sukses.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }
            if(isset($_SESSION["suksesPerditsimi"])){
                echo' <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                        <strong class="mx-2">Me sukses!</strong> Perdoruesi u perditsua me sukses.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }
        ?> 
        <?php include "./funksione/funksioniAdmin.php";  ?>
    </div>
</body>
</html>

<?php
unset($_SESSION["sukses"]);
unset($_SESSION["error"]);
unset($_SESSION["suksesPerditsimi"]);
?>