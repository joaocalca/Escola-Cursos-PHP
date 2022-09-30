<?php

include "db.php";

$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$statement = $conexao->prepare('INSERT INTO CURSOS(NOME_CURSO, CARGA_HORARIA)
    VALUES(:nome_curso, :carga_horaria)');

$statement->bindParam(':nome_curso', $nome_curso);
$statement->bindParam(':carga_horaria', $carga_horaria);

$statement->execute();

header('location:index.php?pagina=cursos');