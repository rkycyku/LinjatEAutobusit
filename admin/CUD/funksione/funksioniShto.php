<?php
session_start();
include '../../konektimi/connection.php';


if ($stmt = $conn->prepare('SELECT id, nisja, mberritja, kompania, relacioni_fq, relacioni, statusi FROM linjat WHERE nisja = ? and mberritja = ? and relacioni = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc).
	$stmt->bind_param('sss', $_POST['nisja'], $_POST['mberritja'], $_POST['relacioni']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		// Ne rast se linja egziston, shfaqet mesazhi i Error!

		$_SESSION["error"] = TRUE;
		header("Location: ../../CUD/shtimi.php");
	} else {
		// Shtimi i linjave
        if ($stmt = $conn->prepare('INSERT INTO linjat (nisja, mberritja, kompania, relacioni_fq, relacioni, statusi) VALUES (?, ?, ?, ?, ?, ?)')) {
            $stmt->bind_param('ssssss',$_POST['nisja'], $_POST['mberritja'], $_POST['kompania'], $_POST['relacioniFQ'], $_POST['relacioni'], $_POST['statusi']);
            $stmt->execute();
            $_SESSION["sukses"] = TRUE;
			header("Location: ../../CUD/shtimi.php");
        } else {
            echo 'Problem me krijimin e statement!!!';
        }
	}
	$stmt->close();
} else {
	echo 'Problem me krijimin e statement!!!';
}
$conn->close();
?>