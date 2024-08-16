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

<h2>Cadastrar Aluno</h2>
<div class="form-container">
	<p class="title">Cadastro</p>
	<form class="form" action="" method="post">
            <div class="input-group" >
                <label for="ra">RA</label>
                <input type="text" name="ra" id="ra" placeholder=""  style="width: 87%;">
            </div>
            <br>        
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder=""  style="width: 87%;">
            </div>
            <br>
            <div class="input-group">
                <label for="curso">Curso</label>
                <select name="curso" id="curso">
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

</body>
</html>

<?php

     if ($_SERVER["REQUEST_METHOD"] === 'POST') {
         $login = $_POST["login"];
         $senha = $_POST["senha"];

         //o ideal seria a senha ser criptografada ao cadastrar o usuário no bd, e aí ao validar aqui, usar o mesmo algoritmo de criptografia para a senha informada no form
         //$senha = crypt($senha, "c0t1lUn1camp");

        if ( (trim($login) != "") && (trim($senha != "")) ) {
            try {  

                include("conexaoBD.php");

                $stmt = $pdo->prepare("select * from usuarios where login = :login and senha = :senha");
                $stmt->bindParam(':login', $login);    
                $stmt->bindParam(':senha', $senha);     
                     
                $stmt->execute();
                $rows = $stmt->rowCount();

                if ($rows > 0) {

                    session_start();


                   // $_SESSION['logado'] = true;

                    $dadosusuario = $stmt->fetch(); //pega os dados retornados, criando um array
                    $tipo = $dadosusuario["perfil"];
                    if($tipo == "1"){
                      $_SESSION["logado"] = "DIRETOR";
                        header("location: diretor.php");
                    } else if($tipo == "2"){
                      $_SESSION["logado"] = "PROFESSOR";
                        header("location: professor.php");
                    } else if($tipo == "3"){
                      $_SESSION["logado"] = "ALUNO";
                        header("location: aluno.php");
                    }
                } else {
                    echo "Login e/ou senha inválido(s)";
                } 
                 
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
   
            $pdo = null;

        } else {
            echo "Informe o login e a senha!";
        }
     }     
?>