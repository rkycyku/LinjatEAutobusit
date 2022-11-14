<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        if(isset($_SESSION["sukses"])){
            echo '<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <strong class="mx-2">Me sukses!</strong>
                                Linja u largua me sukses.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
        }
    ?> 
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <th>Nisja</th>
                <th>Mberritja</th>
                <th>Kompania</th>
                <th>Shenime Shtes</th>
                <th>Funksione</th>
            </thead>
            
            <tbody>
                <?php
                    include "./funksione/connection.php"; 

                    // read all row from database table
                    $sql = "SELECT * FROM linjat where relacioni = '$file1' ORDER BY nisja";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }

                    // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>$row[nisja]</td>
                            <td>$row[mberritja]</td>
                            <td>$row[kompania]</td>
                            <td>$row[shenimeShtes]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='perditeso.php?id=$row[id]'>Perditeso</a>
                                <a class='btn btn-danger btn-sm' href='funksione/largo.php?id=$row[id]'>Largo</a>
                            </td>
                        </tr>
                    ";
                }

                $conn->close();
                ?>
        </table>
    </div">
</body>
</html>
