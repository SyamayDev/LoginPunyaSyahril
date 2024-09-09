<?php
session_start();
include 'koneksi.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $data = mysqli_fetch_array($sql);
        $_SESSION['username'] = $data['username'];
        $_SESSION['userid'] = $data['userid'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['status'] = 'login';

        if ($data['role'] == 'admin') {
            header('Location: dashboard_admin.php');
        } else {
            header('Location: dashboard_pengguna.php');
        }
    } else {
        echo "<script>
            alert('Username atau Password Salah');
            window.location.href='index.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Username dan Password harus diisi');
        window.location.href='index.php';
    </script>";
}

mysqli_close($koneksi);
?>
