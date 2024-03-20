<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1 style="text-align: center;">Sistema Acadêmico</h1>
    <hr>
    <form method="post">
        Login:<br>
        <input type="text" name="login" id="login" required>

        <br><br>

        Senha:<br>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <input type="submit" value="Realizar login">
        <hr>

        <?php
            if ($pagina != ""){
                include $pagina;
            }
        ?>
    </form>
</body>
</html>