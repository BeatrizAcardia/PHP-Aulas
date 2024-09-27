<?php
session_start();

$defined_username = "lorena"; 
$defined_password = password_hash("senha123", PASSWORD_DEFAULT); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    if (empty($username) || empty($password)) {
        echo "Por favor, preencha todos os campos.";
    } else if (strlen($username) < 5) {
        echo "O nome de usuário deve ter pelo menos 5 caracteres.";
    } else if (strlen($password) < 8) {
        echo "A senha deve ter pelo menos 8 caracteres.";
    } else if ($username !== $defined_username || !password_verify($password, $defined_password)) {
        echo "Nome de usuário ou senha incorretos.";
    } else {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: your_page.php");
        exit;
    }
}
?>
