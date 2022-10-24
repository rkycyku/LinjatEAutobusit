<?php 
    include "../../admin/konektimi/connection.php"; 
?>

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
        <?php include "../../design/header.php" ; ?>
        <h2 class="text-center">Linja | Kaçanik - Ferizaj</h2>
        <br>
        <?php 
            $path = "/kqfr.php";
            $file1 = basename($path, ".php");
            $_SESSION['faqja'] = '../../../linjat/kq/kqfr.php';

            include "../../design/tabela.php"; 
        ?>
    </div>
</body>
</html>


<?php
unset($_SESSION['sukses']);
?>