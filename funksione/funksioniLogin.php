<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include './connection.php';




if ( !isset($_POST['username'], $_POST['password']) ) {
	// Nuk mund te pranohen te gjitha te dhenat qe duhet te dergohen
	exit('Ju lutem plotesoni te gjitha fushat!');
}
if ($stmt = $conn->prepare('SELECT id, password, aksesi, emri, mbiemri FROM user WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), ne rastin tone username eshte string dhe perdorim "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
    // E ruajme llogarin per ta shikuar se a egziston ne databaze
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $aksesi, $emri, $mbiemri);
        $stmt->fetch();
        // Llogarija ekkziston tani duhet te veriufikojme password
        if (password_verify($_POST['password'], $password)) {
            // Veerifiki eshte me sukses, perdoruesi tani eshe kyqyr
            // Tani i krijojme Sesionet te cilat na nevojiten per te i ruajtur te dhenat.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $emri;
            $_SESSION['aksesi'] = $aksesi;
            $_SESSION['id'] = $id;
            header('Location: ../index.php');
            
        } else {
            $_SESSION["error"] = TRUE;
            header("location: ../login.php");
        }
    } else {
        $_SESSION["error"] = TRUE;
        header("location: ../login.php");
    }

	$stmt->close();
}
?>