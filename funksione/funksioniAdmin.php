<?php 
include "connection.php"; 
include 'auth_check_admin.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>User</th>
                <th>Aksesi</th>
                <th>Funksionet</th>
            </thead>
            
            <tbody>
                <?php
                    

                    // Lexojme te gjitha rreshtat nga tabela
                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }

                    // Lexojm te dheneat e te gjitha rreshtave
                while($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>$row[emri]</td>
                            <td>$row[mbiemri]</td>
                            <td>$row[username]</td>
                            <td>$row[aksesi]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='./perditesoUser.php?id=$row[id]'>Perditeso</a>
                                <a class='btn btn-danger btn-sm' href='./funksione/largoUser.php?id=$row[id]&aksesi=$row[aksesi]'>Largo</a>
                            </td>
                        </tr>
                    ";
                }

                $conn->close();
                ?>
        </table>
    </div>
</body>
</html>