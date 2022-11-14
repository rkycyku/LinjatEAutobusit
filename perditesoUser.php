<?php 
include './funksione/perditesoUserFunksioni.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat E Autobusave | Perditesimi Linjave</title>
</head>
<body>
    <div class="container">
        <?php include './design/header.php'; ?>
        <br>
        <h1>Perditsimi i Perdoruesve</h1>
        <br>
        <?php
            if(isset($_SESSION["UserNSame"])){
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                        <strong class="mx-2">Ky username egizston!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }
        ?>
        
        <form action="perditesoUser.php" method="post">
        
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="emri" value="<?php echo $emri; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Mbiemri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="mbiemri" value="<?php echo $mbiemri; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Aksesi</label>
                <div class="col-sm-6">
                    <div class="form-row">
                        <div class="form-group col col-lg-6">
                            <?php include "funksione/radioButton/radioButton_Aksesi.html"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button class="btn btn-outline-primary" type="submit">Perfundo</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="admin.php" role="button">Anulo</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
