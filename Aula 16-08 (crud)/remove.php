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
    </style>
</head>

<body>
    <a href="index.html">Home</a>

    <hr>

    <h2>Exclusão de Alunos</h2>

    <hr>
</body>
</html>

<?php
            include("conexaoBD.php");

<<<<<<< HEAD
            if(!isset($_GET["raAluno"])){
                echo "Selecione o aluno a ser excluído!";
            } else {
                $ra = $_GET["raAluno"];

                try{
                    $stmt = $pdo -> prepare('Select arquivoFoto from Alunos where ra = :ra');
                    $stmt -> bindParam(':ra', $ra);
                    $stmt -> execute();
                    $row = $stmt->fetch();
                    $arquivoFoto = $row["arquivoFoto"];

                    $stmt = $pdo->prepare('Delete from Alunos where ra = :ra');
                    $stmt->bindParam(':ra', $ra);
                    $stmt->execute();

                    if($arquivoFoto != null){
                        unlink($arquivoFoto);
                    }
=======
            if(!isset($_POST["raAluno"])){
                echo "Selecione o aluno a ser excluído!";
            } else {
                $ra = $_POST["raAluno"];

                try{
                    $stmt = $pdo -> prepare('Delete from Alunos where ra = :ra');
                    $stmt -> bindParam(':ra', $ra);
                    $stmt -> execute();
>>>>>>> bdc76bec4f9cd75a685a99e8b6fbe1a9e516a24a

                    echo $stmt -> rowCount(). " aluno de RA $ra removido!";
                }catch (PDOException $e){
                    echo 'Erro: ' . $e -> getMessage();
                }
            }
            $pdo = null;
?>