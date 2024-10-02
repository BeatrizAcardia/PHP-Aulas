<?php
    include("conexaoBD.php");

    $ra = $_POST['ra'];
    $novoNome = $_POST['nome'];
    $novoCurso = $_POST['curso'];
    $novaFoto = $_POST['arquivoFoto'];

    try {
        $stmt = $pdo->prepare('UPDATE Alunos SET nome = :novoNome, curso = :novoCurso, arquivoFoto = :novaFoto WHERE ra = :ra');
        $stmt->bindParam(':novoNome', $novoNome);
        $stmt->bindParam(':novoCurso', $novoCurso);
        $stmt->bindParam(':ra', $ra);
        $stmt->bindParam(':novaFoto', $uploadFile);
        $stmt->execute();

        $resposta = "Os dados do aluno de RA $ra foram alterados!";
    }catch (PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Poppins", sans-serif;
        }
body{
      font-family: "Poppins", sans-serif;
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

.button2 {
  display: inline-block;
  padding: 12px 24px;
  border: 1px solid #4f4f4f;
  border-radius: 4px;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  font-size: 19px;
  cursor: pointer;
  color: black;
  z-index: 1;
}

.button2:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.button2:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #bd39b2;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.button2:hover {
  color: #ffffff;
  border: 1px solid #bd39b2;
}

.button2:hover:before {
  top: -35%;
  background-color: #bd39b2;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.button2:hover:after {
  top: -45%;
  background-color: #bd39b2;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.button {
  display: inline-block;
  padding: 12px 24px;
  border: 1px solid #4f4f4f;
  border-radius: 4px;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  font-size: 19px;
  cursor: pointer;
  color: black;
  z-index: 1;
}

.button:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.button:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #8839bd;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.button:hover {
  color: #ffffff;
  border: 1px solid #8839bd;
}

.button:hover:before {
  top: -35%;
  background-color: #8839bd;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.button:hover:after {
  top: -45%;
  background-color: #8839bd;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

    </style>
</head>

<body>

<h3> <?=$resposta?></h3>

<div class="form-container">
<button class="button" onclick="window.open('cadastra.php', '_top');">Cadastrar</button>
<br>
<button class="button2" onclick="window.open('consulta.php', '_top');">Consultar</button>

</div>

</body>
</html>
