<?php
require 'koneksi.php';  // Pastikan file koneksi.php sudah benar

// Ambil data dari form
$Username = $_POST["Username"];
$Password = $_POST["Password"];

// Menyiapkan query dengan prepared statement untuk mencegah SQL Injection
$query_sql = "SELECT * FROM tbl_users
 WHERE Username = '$Username' AND Password = '$Password' ";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
   header("Location: dashboard.html");
} else {
    echo"<h1><center>pasword salah anjay</h1></center>";
}

?>
