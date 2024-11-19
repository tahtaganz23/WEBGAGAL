<?php
// Konfigurasi koneksi database
$host = "localhost";    // Alamat server, misalnya localhost
$username = "root";     // Nama pengguna database
$password = "";         // Kata sandi database (kosongkan jika tidak ada kata sandi)
$dbname = "db_users"; // Nama database yang ingin Anda hubungkan

// Membuat koneksi ke database menggunakan mysqli
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else if ($_POST ["Username"] !==$username) {
    echo "<h2><center>Klik Tombolnya ngab</center></h2>
    <center><button> 
    <a href='index.html'>ulang brader</a>
    </button></center>";

} 

?>
