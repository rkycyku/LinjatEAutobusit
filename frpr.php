<?php  include "./funksione/connection.php";  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linjat e Autobusit | Ferizaj - Prishtine</title>
</head>

<body>
    <div class="container">
        <?php include "./design/header.php"; ?>
        <h2 class="text-center">Linja | Ferizaj - Prishtine</h2>
        <br>
        <?php 
            $path = "/frpr.php";
            $file1 = basename($path, ".php");
            $_SESSION['faqja'] = '../frpr.php';

            include "./design/mesazhiSukses.php";
            include "./design/tabela.php";  
        ?>
    </div>
</body>
</html>

<?php
unset($_SESSION['sukses']);
unset($_SESSION['perditsimiMeSukseses']);
?>