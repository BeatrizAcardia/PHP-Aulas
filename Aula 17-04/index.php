<html>
<body>
    <form method="post" action="cookie.php">
        Nome: <br>
        <input type="text" name="nome" size=30>
        <br><br>

        Idade: <br>
        <input type="number" name="idade" size="30">
        <br><br>

        Cor: <br>
        <input type="color" name="cor">
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php
    if($_SERVER["RESQUEST_METHOD"] === 'POST') {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cor = $_POST["cor"];

        setcookie("InfoUser-Nome", $nome, time()+3600, "/");
        setcookie("InfoUser-Idade", $idade, time()+3600, "/");
        setcookie("InfoUser-Cor", $cor, time()+3600, "/");
        setcookie("InfoUser-contaVisitas", 0, time()+3600, "/");

        echo "Cadastro efetuado com sucesso!";
    }
?>