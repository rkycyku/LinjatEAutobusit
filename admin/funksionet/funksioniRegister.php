<?php
session_start();
include '../konektimi/connection.php';

// Duhet te verifikohet se a ekzioton kjo llogari me kete username.
if ($stmt = $conn->prepare('SELECT id, password, aksesi, emri, mbiemri FROM user WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etj), hashoj password-in duke perdorur funksionin password_hash.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Ruajm rezultatin qe te verifikojme se a egziston perdoruesi ne databaze
	if ($stmt->num_rows > 0) {
		// Username ekziston!
		
		$_SESSION["error"] = TRUE;
		header("location: ../register.php");
	} else {
		// Nese username nuk eshte i perdorur, krijojme llogarin e re.
        if ($stmt = $conn->prepare('INSERT INTO user (username, password, emri, mbiemri) VALUES (?, ?, ?, ?)')) {
			// Passwpordi duhet te ruhet si hash, per tu mos ekspozuar ne databaze!
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('ssss',$_POST['username'], $password, $_POST['emri'], $_POST['mbiemri']);
            $stmt->execute();
            $_SESSION["sukses"] = TRUE;
			header("location: ../register.php");
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



