<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Cadastro de Alunos</title>
<<<<<<< HEAD
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
=======
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Poppins", sans-serif;
        }
body{
    
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

.centrar{
  display: flex;
  flex-direction: column;
  align-items: center;
}
>>>>>>> bdc76bec4f9cd75a685a99e8b6fbe1a9e516a24a
    </style>
</head>

<body>

<h2>Cadastrar Aluno</h2>
<div class="form-container">
<<<<<<< HEAD
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
=======
	<p class="title">Cadastro</p>
	<form class="form" method="post">
            <div class="input-group" >
                <label for="ra">RA</label>
                <input type="text" name="ra" id="ra" placeholder=""  style="width: 87%;" required>
            </div>
            <br>        
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder=""  style="width: 87%;" required>
            </div>
            <br>
            <div class="input-group">
                <label for="curso">Curso</label>
                <select name="curso" id="curso" required>
                    <option></option>
                    <option value="Edificações">Edificações</option>
                    <option value="Enfermagem">Enfermagem</option>
                    <option value="Geodésia e Cartografia">Geodésia e Cartografia</option>
                    <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                    <option value="Qualidade">Qualidade</option>
                    <option value="Mecânica">Mecânica</option>
                    <option value="Prótese Dentária">Prótese Dentária</option>
                </select>
            </div>
                    <br>
            <button class="sign">Cadastrar</button>
	</form>
</div>
<br><br>
</body>
</html>

<?php

     if ($_SERVER["REQUEST_METHOD"] === 'POST') {
      try{
>>>>>>> bdc76bec4f9cd75a685a99e8b6fbe1a9e516a24a
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

<<<<<<< HEAD
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
=======
        if ((trim($ra) == "") || (trim($nome) == "")) {
          echo "<span id='warning'>RA e nome são obrigatórios!</span>";
        } else{
            include("conexaoBD.php");

            //verificando se RA informado já existe no BD para não dar exception
            $stmt = $pdo->prepare("select * from Alunos where ra = :ra");
            $stmt->bindParam(':ra', $ra);           
            $stmt->execute();

            $rows = $stmt->rowCount();

            if ($rows <= 0) {
              $stmt = $pdo->prepare("insert into Alunos (ra, nome, curso) values(:ra, :nome, :curso)");
              $stmt->bindParam(':ra', $ra);
              $stmt->bindParam(':nome', $nome);
              $stmt->bindParam(':curso', $curso);                 
              $stmt->execute();

              echo "<span id='success'>Aluno cadastrado com sucesso!</span> <br>";
              echo "<button class='sign' style = 'width: 10%'><a href='consulta.php' style = 'color: rgba(17, 24, 39, 1); '>Consultar</a></button>";
            } else{
              echo "<span id='erro'>O cadastro com esse ra já exite!</span>";
            }

        }
      }catch (PDOException $e){
         echo 'Error: ' . $e ->getMessage();
      }
        $pdo = null;
    }
?>
>>>>>>> bdc76bec4f9cd75a685a99e8b6fbe1a9e516a24a
