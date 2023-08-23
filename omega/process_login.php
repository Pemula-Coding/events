<?php
// Di process_login.php, setelah login berhasil:
session_start();

// Set sesi timeout menjadi 1 minggu
$timeout = 60 * 60 * 24 * 7; // 1 minggu dalam detik
session_set_cookie_params($timeout);

// Regenerate ID sesi untuk mengurangi risiko serangan sesi
session_regenerate_id(true);

$_SESSION['user_id'] = $user_id; // Simpan informasi pengguna ke dalam sesi

// Redirect ke halaman setelah login berhasil
header("Location: main.php");
?>