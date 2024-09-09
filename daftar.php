<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles_daftar.css">
</head>
<body>
    <div class="container">
        <h2>Daftar</h2>
        <form action="proses_daftar.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Daftarkan Username Kamu" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Daftarkan Password Kamu" required>
            </div>
            <div class="form-group">
                <label for="role">Pilih Peran</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>Pilih Peran Anda</option>
                    <option value="admin">Admin</option>
                    <option value="user">Pengguna</option>
                </select>
            </div>
            <button type="submit" class="btn">Register</button>
            <p>Sudah punya akun? <a href="index.php">Login disini</a></p>
        </form>
    </div>
</body>
</html>
