<?php
session_start();

// kalau sudah login langsung ke index
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$error = "";

// login sederhana (hardcode)
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Parkir</title>
</head>
<body>

<h2>Login Sistem Parkir</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>

<p style="color:red;"><?php echo $error; ?></p>

</body>
</html>