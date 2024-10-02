<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Cadastro de Alunos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
        }
        .form-container {
            width: 320px;
            border-radius: 0.75rem;
            background-color: rgba(17, 24, 39, 1);
            padding: 2rem;
            color: rgba(243, 244, 246, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .title {
            text-align: center;
            font-size: 1.5rem;
            line-height: 2rem;
            font-weight: 700;
        }
        .form {
            margin-top: 1.5rem;
        }
        .input-group {
            margin-top: 0.25rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
        .input-group label, select {
            display: block;
            color: rgba(156, 163, 175, 1);
            margin-bottom: 4px;
        }
        .input-group input, select {
            border-radius: 0.375rem;
            border: 1px solid rgba(55, 65, 81, 1);
            outline: 0;
            background-color: rgba(17, 24, 39, 1);
            padding: 0.75rem 1rem;
            color: rgba(243, 244, 246, 1);
        }
        .input-group input:focus, select:focus {
            border-color: rgba(167, 139, 250);
        }
        .sign {
            display: block;
            width: 100%;
            background-color: rgba(167, 139, 250, 1);
            padding: 0.75rem;
            text-align: center;
            color: rgba(17, 24, 39, 1);
            border: none;
            border-radius: 0.375rem;
            font-weight: 600;
        }
        .centrar {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>

<h2>Cadastrar Aluno</h2>
<div class="form-container">
    <p class="title">Cadastro</p>
    <form class="form" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <label for="ra">RA</label>
            <input type="text" name="ra" id="ra" placeholder="" style="width: 87%;" required>
        </div>
        <br>
        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="" style="width: 87%;" required>
        </div>
        <br>
        <div class="input-group">
            <label for="curso">Curso</label>
            <select name="curso" id="curso" required>
                <option value="" disabled selected>Selecione um curso</option>
                <option value="Edificações">Edificações</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="Geodésia e Cartografia">Geodésia e Cartografia</option>
                <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                <option value="Qualidade">Qualidade</option>
                <option value="Mecânica">Mecânica</option>
                <option value="Prótese Dentária">Prótese Dentária</option>
            </select>
        </div>
        <div class="input-group">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem" style="width: 87%;" accept="image/*" required>
        </div>
        <br>
        <button class="sign" type="submit">Cadastrar</button>
    </form>
</div>
<br><br>
<div class="msg-container"><?= isset($msg) ? $msg : ''; ?></div>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    define('TAMANHO_MAXIMO', 2 * 1024 * 1024);
    $msg = "";
    try {
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

        // upload dir
        $uploadDir = "upload/fotos/";

        // Verifique se o diretório existe, se não, crie-o
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // fotos
        $foto = $_FILES['imagem'];
        $nomeFoto = $foto['name'];
        $tipoFoto = $foto['type'];
        $tamanhoFoto = $foto['size'];

        $info = new SplFileInfo($nomeFoto);
        $extensaoArq = $info->getExtension();
        $novoNomeFoto = $ra . "." . $extensaoArq;

        if (trim($ra) == "" || trim($nome) == "") {
            $msg = "<span id='warning'>RA e nome são obrigatórios!</span>";
        } else {
            include("conexaoBD.php");

            // verificando se RA informado já existe no BD
            $stmt = $pdo->prepare("SELECT * FROM Alunos WHERE ra = :ra");
            $stmt->bindParam(':ra', $ra);
            $stmt->execute();

            if ($stmt->rowCount() <= 0) {
                $uploadfile = null;
                if ($nomeFoto != "" && move_uploaded_file($foto['tmp_name'], $uploadDir . $novoNomeFoto)) {
                    $uploadfile = $uploadDir . $novoNomeFoto;
                } else {
                    $msg = "Erro ao fazer upload da imagem";
                }

                if ($uploadfile) {
                    $stmt = $pdo->prepare("INSERT INTO Alunos (ra, nome, curso, arquivoFoto) VALUES (:ra, :nome, :curso, :arquivoFoto)");
                    $stmt->bindParam(':ra', $ra);
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':curso', $curso);
                    $stmt->bindParam(':arquivoFoto', $uploadfile);
                    $stmt->execute();

                    $msg = "<span id='success'>Aluno cadastrado com sucesso!</span> <br>";
                    $msg .= "<button class='sign' style='width: 10%'><a href='consulta.php' style='color: rgba(17, 24, 39, 1); '>Consultar</a></button>";
                }
            } else {
                $msg = "<span id='erro'>O cadastro com esse RA já existe!</span>";
            }
        }
    } catch (PDOException $e) {
        $msg = 'Error: ' . $e->getMessage();
    }
    $pdo = null;
}
?>
</body>
</html>
