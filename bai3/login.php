<?php
session_start();

include 'db_connect.php';



$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password_input = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password_input, $user['password'])) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Sai email hoặc mật khẩu";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Đăng nhập</h2>
<p style="color:red"><?= $error ?></p>
<form method="post">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>
