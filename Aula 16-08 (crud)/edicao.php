<?php
     if (!isset($_GET["raAluno"])) {
      echo "Selecione o aluno a ser editado!";
    } else {
        $ra = $_GET["raAluno"];

        try{
            include("conexaoBD.php");
            $stmt = $pdo->prepare('select * from Alunos where ra = :ra');
            $stmt->bindParam(':ra', $ra);
            $stmt->execute();

            $edificacoes = "";
            $enfermagem = "";
            $geodesia = "";
            $informatica = "";
            $mecanica = "";
            $qualidade = "";
            $protese = "";

            while ($row = $stmt->fetch()){
                $nome = $row['nome'];
                $curso = $row['curso'];
                $foto = $row['aquivoFoto'];

                if($row['curso'] == "Edificações"){
                    $edificacoes = "selected";
                } else if($row['curso'] == "Enfermagem"){
                    $enfermagem = "selected";
                } else if($row['curso'] == "Geodésia e Cartografia"){
                    $geodesia = "selected";
                } else if($row['curso'] == "Desenvolvimento de Sistemas"){
                    $informatica = "selected";
                } else if($row['curso'] == "Mecânica"){
                    $mecanica = "selected";
                } else if($row['curso'] == "Qualidade"){
                    $qualidade = "selected";
                } else if($row['curso'] == "Prótese Dentária"){
                    $protese = "selected";
                }
            }
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Cadastro de Alunos</title>
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
    </style>
</head>

<body>

<h2>Editar Aluno</h2>
<div class="form-container">
	<p class="title">Edição</p>
	<form class="form" method="post" action="altera.php">
            <div class="input-group" >
                <label for="ra">RA</label>
                <input type="text" name="ra" id="ra" placeholder="" style="width: 87%;" value= '<?=$ra?>' required readonly>
            </div>
            <br>        
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="" style="width: 87%;" value= '<?=$nome?>' required>
            </div>
            <br>
            <div class="input-group">
                <label for="curso">Curso</label>
                <select name="curso" id="curso" required>
                    <option></option>
                    <option value="Edificações" <?=$edificacoes?> >Edificações</option>
                    <option value="Enfermagem" <?=$enfermagem?> >Enfermagem</option>
                    <option value="Geodésia e Cartografia" <?=$geodesia?> >Geodésia e Cartografia</option>
                    <option value="Desenvolvimento de Sistemas" <?=$informatica?> >Desenvolvimento de Sistemas</option>
                    <option value="Qualidade" <?=$qualidade?> >Qualidade</option>
                    <option value="Mecânica" <?=$mecanica?> >Mecânica</option>
                    <option value="Prótese Dentária" <?=$protese?> >Prótese Dentária</option>
                </select>
            </div>
                    <br>
            <div class="input-group">
              <label for="curso">Foto</label>
              <img src="<?=$foto?>" alt="" width="50px">
              <input type="file" name="foto">
              <br><br>
            </div>
            <button class="sign" type="submit">Salvar alterações</button>
	</form>
</div>
<br><br>
</body>
</html>
