<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // GANTI INI SESUAI MAU KAMU
    $OWNER_USER = "pemilik";
    $OWNER_PASS = "rahasia123";

    if ($username === $OWNER_USER && $password === $OWNER_PASS) {
        $_SESSION['owner'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Akses ditolak!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login Pemilik</title></head>
<body>
<h2>Login Pemilik</h2>
<?php if(!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
<form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button name="login">Login</button>
</form>
</body>
</html>
