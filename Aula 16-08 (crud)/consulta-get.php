<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Consulta de Alunos</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

.sign2{
  background-color: rgba(167, 139, 250, 1);
  padding: 0.75rem;
  text-align: center;
  color: rgba(17, 24, 39, 1);
  border: none;
  border-radius: 0.375rem;
}


.excluir {
  background-color: rgba(167, 139, 250, 1);
  color: rgba(17, 24, 39, 1);
  border: none;
}

.centrar{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.botaos{
    display: flex;
    flex-direction: row;
    gap: 1rem;
}
    </style>
</head>

<body>
  <br><br>
<div class="form-container">
	<p class="title">Consulta</p>
	<form method="post">
  <div class="input-group" >
                <label for="ra">RA</label>
            </div>
            <div class="input-group" >
                <input type="text" name="ra" id="ra" placeholder=""  style="width: 100%;">
            </div>
        <br>
        <button class="sign">Consultar</button>
    </form>
</div>
<br><br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        
        include("conexaoBD.php");

        if(isset($_POST["ra"]) && ($_POST["ra"] !== "")){
            $ra = $_POST["ra"];

            $stmt = $pdo -> prepare("select * from Alunos where ra= :ra");
            $stmt->bindParam(':ra', $ra);
        } else {
            $stmt = $pdo -> prepare("select * from Alunos order by curso, nome");
        }

        try{
            $stmt->execute();
            echo "
            <div class='botaos'>
            <button class='sign2' type='submit' formaction='remove.php'><img src='excluir.png' width='25px'></button>
            <button class='sign2' type='submit' formaction='edita.php'><img src='editar.png' width='25px'></button>
            </div>
            <br>";
            echo "
            <form method = 'post' style='display: contents;'>
            <table class='table table-striped' style='width: 30%; color: rgba(243, 244, 246, 1);'>
            <thead>
              <tr style = ' background-color: rgba(17, 24, 39, 1); '>
              <th></th>
                <th scope='col'>RA</th>
                <th scope='col'>Nome</th>
                <th scope='col'>Curso</th>
              </tr>
            </thead>";

            $stmt->execute();

            while ($row = $stmt->fetch()) {
              echo " <tbody>
              <tr style = ' background-color: rgba(167, 139, 250, 1); color: rgba(17, 24, 39, 1); '>";
              echo "<td> <input type='radio' name='raAluno' value='" . $row['ra'] . "'></td>" ;
              echo "<td>" . $row['ra']. "</td>";
              echo "<td>" . $row['nome']. "</td>";
              echo "<td>" . $row['curso']. "</td>";
            }

            echo "</tr></tbody></table>";

        } catch(PDOException $e){
          echo 'Error: ' . $e -> getMessage();
        }

        $pdo = null;
    }


?>

