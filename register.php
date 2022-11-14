<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat E Autobusave | Regjistrimi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <?php include './design/header.php'; ?>
        <h1 class="text-center">Regjistrimi</h1>
        <br>
        <form action="./funksione/funksioniRegister.php" method="post" >
            <?php
                    if(isset($_SESSION["error"])){
                        echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                        <strong class="mx-2">Error!</strong>
                                            Ky perdorues egziton! Ju lutem zgjidhni nje tjeter ose Kyquni.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                    }
                    if(isset($_SESSION["sukses"])){
                        echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                        <strong class="mx-2">Me sukses!</strong>
                                            U regjistruat me sukses tani mund te kyqeni.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                    }
                ?> 
                
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="emri" id="emri">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Mbiemri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="mbiemri" id="mbiemri">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Perdoruesi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fjalekalimi</label>
                <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="passsword" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button class="btn btn-outline-primary" type="submit">Regjistro</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="login.php" role="button">Anulo</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
unset($_SESSION["error"]);
unset($_SESSION["sukses"]);
?>