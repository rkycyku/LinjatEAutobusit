<?php 
session_start();
if ($_SESSION['aksesi'] != 'admin' && $_SESSION['aksesi'] != 'founder') {
	header('Location: ../../design/error/403.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat E Autobusave | Shtimi Linjave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php include '../../design/headerCUD.php'; ?>
    <br>
        <h1 class="text-center">Shtimi i Linjave</h1>
        <br>
        
        <form action="./funksione/funksioniShto.php" method="post">
        <?php 
            if(isset($_SESSION["sukses"])){
                echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <strong class="mx-2">Sukses!</strong>
                                    Linja u shtua me sukes! Ju mund te shtoni nje tjeter.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }elseif(isset($_SESSION["error"])){
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
                <strong class="mx-2">Error!</strong>
                                    Kjo linje Ekziston!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }
        ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nisja</label>
                <div class="col-sm-6">
                    <input type="time" name="nisja" class="form-control" value="06:00" id="nisja "required/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Mberritja</label>
                <div class="col-sm-6">
                    <input type="time" name="mberritja" class="form-control" value="00:00" id="mberritja "required/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Relacioni</label>
                <div class="col-sm-9">
                    <div class="form-row">
                        <div class="form-group col col-lg-6">
                            <?php include "radioButton/Relacioni.html"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kompania</label>
                <div class="col-sm-9">
                    <div class="form-row">
                        <div class="form-group col col-lg-9">
                            <?php include "radioButton/Kompanit.html"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Statusi</label>
                <div class="col-sm-6">
                    <div class="form-row">
                        <div class="form-group col col-lg-6">
                            <?php include "radioButton/Statusi.html"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Relacioni FQ</label>
                <div class="col-sm-6">
                    <div class="form-row">
                        <div class="form-group col col-lg-6">
                            <?php include "radioButton/RelacioniFQ.html"; ?>
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
                    <a class="btn btn-outline-primary" href="../../index.php" role="button">Anulo</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
unset($_SESSION["sukses"]);
unset($_SESSION["error"]);
?>