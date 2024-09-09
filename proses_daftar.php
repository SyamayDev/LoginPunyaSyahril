<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role']; 

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = mysqli_query($koneksi, "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '$role')");

if ($sql) {
    echo "<script>
    alert('Pendaftaran Akun Berhasil');
    location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Pendaftaran Akun Gagal: " . mysqli_error($koneksi) . "');
    location.href='../daftar.php';
    </script>";
}

mysqli_close($koneksi);

?>
