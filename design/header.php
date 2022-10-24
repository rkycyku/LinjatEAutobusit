<?php
// Ne e perdorim $_SESSION, prandaj duhet gjithmone ta filojme session.
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../index.php">Linjat E Autobusit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kaçanik</a>
                <div class="dropdown-menu">
                    <a href="../kq/kqfr.php" class="dropdown-item">Kaçanik - Ferizaj</a>
                    <a href="../kq/kqpr.php" class="dropdown-item">Kaçanik - Prishtine</a>
                </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ferizaj</a>
                <div class="dropdown-menu">
                    <a href="../fr/frkq.php" class="dropdown-item">Ferizaj - Kaçanik</a>
                    <a href="../fr/frpr.php" class="dropdown-item">Ferizaj - Prishtine</a>
                </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Prishtine</a>
                <div class="dropdown-menu">
                    <a href="../pr/prfr.php" class="dropdown-item">Prishtine - Ferizaj</a>
                    <a href="../pr/prkq.php" class="dropdown-item">Prishtine - Kaçanik</a>
                </div>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
            <div class="dropdown-menu">
              <a href="../../admin/admin.php" class="dropdown-item">Menaxhmenti</a>
              <a href="../../admin/CUD/shtimi.php" class="dropdown-item">Shtoni Linja</a>
              <a href="" class="dropdown-item"><?php echo 'Pershendetje ' . $_SESSION['name'] . '!'; ?></a>
            </div>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../admin/login.php">Hyrja</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../../admin/funksionet/FunksioniLogout.php">Shkyqu</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
</body>
</html>