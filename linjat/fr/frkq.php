<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat e Autobusit | Ferizaj - Kaçanik</title>
</head>

<body>
    <?php include "../../admin/konektimi/connection.php"; 
        ?>
    <div class="container">
        <?php include "../../design/header.php" ; ?>
        <h2 class="text-center">Linja | Ferizaj - Kaçanik</h2>
        <br>
        <?php 
            
            $_SESSION['faqja'] = '../../../linjat/fr/frkq.php';
            $path = "/frkq.php";
            $file1 = basename($path, ".php");
        
            include "../../design/tabela.php"; 
        ?>
    </div>
</body>
</html>


<?php
unset($_SESSION['sukses']);
?>