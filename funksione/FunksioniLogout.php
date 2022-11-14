<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
session_destroy();
// Rikthimi te faqja fillestare
header('Location: ../index.php');
?>