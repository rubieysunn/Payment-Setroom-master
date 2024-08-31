<?php

// Routing dasar
$page = isset($_GET['page']) ? $_GET['page'] : 'hal_utama';

$allowed_pages = ['hal_utama', 'home', 'index', 'laporan', 'pembayaran', 'print', 'profil', 'riwayat', 'struk'];

if (in_array($page, $allowed_pages)) {
    include "app/agen/$page.php";
} else {
    echo 'Page not found.';
}

?>