<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: erro.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
    if (isset($_SESSION['username'])) {
        echo "Bem-vindo, " . $_SESSION['username'] . "!<br>";
        include 'conteudo.php';
    } else {
        include 'erro.php';
    }
    ?>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>