<?php
session_start();
session_destroy();
// Rikthimi te faqja fillestare
header('Location: ../../index.php');
?>