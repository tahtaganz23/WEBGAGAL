<?php
// Menghubungkan dengan database
require 'koneksi.php';  // Pastikan file koneksi.php sudah benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $absen = $_POST["Absen"];

        // Menyiapkan query untuk memasukkan data ke database
        $query_sql = "INSERT INTO tbl_users (username, password, absen) 
        VALUES ('$username', '$password', '$absen')";

        if (mysqli_query($conn, $query_sql)) {
            header("Location: index.html");
        } else {
            echo "Pendaftaran Gagal :" . mysqli_error($conn);
        }
    }
?>