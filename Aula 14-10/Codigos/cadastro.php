<?php

  $ra = $_POST["ra"];
  $nome = $_POST["nome"];
  $curso = $_POST["curso"];

  $filename = fopen("alunos.txt", 'a+');

  $aluno["ra"] = $ra;
  $aluno["nome"] = $nome;
  $aluno["curso"] = $curso;

  $json = json_encode($aluno);

  echo json_encode($json);

  fwrite($filename, $json);

  fclose($filename);

  echo "Cadastro efetuado com sucesso";

  // echo $ra;
  // echo $nome;
  // echo $curso;

  // $aluno = "RA: " . $ra . "<br>Nome: " . $nome . "<br>Curso: " . $curso . "\n\n";

  // echo "<hr>";

  // echo "<br>\nAluno: " . $nome;

  // echo "<br>\nRa: " . $ra;

  // echo "<br>\ncurso: " . $curso;

