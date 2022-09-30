<?php

include "db.php";

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

$statement = $conexao->prepare('INSERT INTO ALUNOS_CURSOS(ID_ALUNO, ID_CURSO)
    VALUES(:id_aluno, :id_curso)');

$statement->bindParam(':id_aluno', $id_aluno);
$statement->bindParam(':id_curso', $id_curso);

$statement->execute();

header('location:index.php?pagina=matriculas');