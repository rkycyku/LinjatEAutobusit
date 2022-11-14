<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include './funksione/connection.php';
    include './funksione/funksioniPerditeso.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(!isset($_GET["id"])){
            header("location: index.php");
            exit;
        }

        $id = $_GET["id"];

        $sql = "SELECT * FROM linjat WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if(!$row){
            header("location: index.php");
            exit;
        }

        $nisja = $row["nisja"];
        $mberritja = $row["mberritja"];
        $kompania = $row["kompania"];
        $relacioni = $row["relacioni"];
        $shenimeShtes = $row["shenimeShtes"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat E Autobusave | Perditesimi Linjave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <?php include './design/header.php'; ?>
        <br>
        <h1>Perditsimi i Linjave</h1>
        <br>

        <?php 
            if(!empty($errorMessage)){
                echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert aria-label='Close'></button>
                    </div>
                ";
            }
        ?>
        <form action="funksione/funksioniPerditeso.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nisja</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" name="nisja" value="<?php echo $nisja; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Mberritja</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" name="mberritja" value="<?php echo $mberritja; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kompania</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kompania" value="<?php echo $kompania; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Relacioni</label>
                <div class="col-sm-6">
                    <div class="form-row">
                        <div class="form-group col col-lg-6">
                            <?php 
                            if($relacioni == 'kqfr'){
                                include "funksione/radioButton/relacionetQytet/RelacioniKQFR.html"; 
                            }elseif($relacioni == 'kqpr'){
                                include "funksione/radioButton/relacionetQytet/RelacioniKQPR.html"; 
                            }elseif($relacioni == 'frkq'){
                                include "funksione/radioButton/relacionetQytet/RelacioniFRKQ.html"; 
                            }elseif($relacioni == 'frpr'){
                                include "funksione/radioButton/relacionetQytet/RelacioniFRPR.html"; 
                            }elseif($relacioni == 'prkq'){
                                include "funksione/radioButton/relacionetQytet/RelacioniPRKQ.html"; 
                            }elseif($relacioni == 'prfr'){
                                include "funksione/radioButton/relacionetQytet/RelacioniPRFR.html"; 
                            }else{
                                include "funksione/radioButton/Relacioni.html"; 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Shenime Shtes</label>
                <div class="col-sm-6">
                    <div class="form-row">
                        <div class="form-group col col-lg-6">
                            <input type="text" name="shenimeShtes" class="form-control" id="shenimeShtes" value="<?php echo $shenimeShtes ?>"/>
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
                    <a class="btn btn-outline-primary" href="index.php" role="button">Anulo</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>