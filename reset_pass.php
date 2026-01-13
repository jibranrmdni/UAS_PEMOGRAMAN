<?php
require_once 'config/Database.php';

// Koneksi ke Database
$database = new Database();
$db = $database->getConnection();

// Buat Password Hash baru untuk kata "admin"
$new_password = password_hash("admin", PASSWORD_DEFAULT);

// Update user admin
$query = "UPDATE users SET password = :p WHERE username = 'admin'";
$stmt = $db->prepare($query);
$stmt->bindParam(':p', $new_password);

if($stmt->execute()) {
    echo "<h1>SUKSES!</h1>";
    echo "Password untuk user <b>admin</b> berhasil di-reset.<br>";
    echo "Password baru: <b>admin</b><br><br>";
    echo "<a href='/gudang_app/login'>Klik disini untuk Login</a>";
} else {
    echo "Gagal update password.";
}
?>