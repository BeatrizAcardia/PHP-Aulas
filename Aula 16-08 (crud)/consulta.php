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

<h2>Consultar Aluno</h2>
<div class="form-container">
	<p class="title">Consulta</p>
	<form method="post">
    <div class="input-group" >
        <label for="ra">RA</label>
        <input type="text" name="ra" id="ra" placeholder="" style="width: 85%;">
        <br><br>
        <button class="sign">Consultar</button>
    </div>
    </form>
</div>
<br><br>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        
        include("conexaoBD.php");

        if(isset($_POST["ra"]) && ($_POST["ra"] = "")){
            $ra = $_POST["ra"];

            $stmt = $pdo -> prepare("select * from Alunos where ra= :ra");
            $stmt->bindParam(':ra', $ra);
        } else {
            $stmt = $pdo -> prepare("select * from Alunos order by curso, nome");
        }

        try{
            $stmt->execute();

            echo "<table>";
        }
    }


?>

