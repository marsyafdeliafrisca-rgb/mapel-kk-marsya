<?php
// Mulai session jika belum aktif
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "Marsya_aplikasi_parkir"; // ganti dengan nama database kamu

// Buat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Set charset (penting untuk karakter UTF-8)
mysqli_set_charset($koneksi, "utf8mb4");
?>