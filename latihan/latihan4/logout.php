<?php
session_start();

// Hapus semua data session
session_destroy();

// Redirect kembali ke halaman index
header("Location: index.php");
exit;
?>