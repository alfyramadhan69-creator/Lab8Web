<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

// matikan mode exception bawaan PHP 8.1+ agar pengecekan di bawah berfungsi
mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} #else echo "Koneksi berhasil";
?>