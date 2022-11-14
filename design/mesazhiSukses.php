<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            if(isset($_SESSION["perditsimiMeSukseses"])){
                echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
                <strong class="mx-2">Me sukses!</strong>
                                    Linja u perditesua me sukses.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }
        ?>
</body>
</html>