<?php
// Di halaman logout.php
session_start();
session_destroy(); // Hancurkan sesi

// Redirect ke halaman login setelah logout
header("Location: login.php");
?>