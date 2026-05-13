<?php
session_start();

// contoh username & password sederhana (bisa diganti database)
$username_benar = "admin";
$password_benar = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $username_benar && $password == $password_benar) {

    // simpan session login
    $_SESSION['user'] = $username;

    // arahkan ke dashboard parkir
    header("Location: dashboard.php");
    exit;

} else {
    echo "<script>
            alert('Login gagal! Username atau password salah');
            window.location.href='login.php';
          </script>";
}
?>