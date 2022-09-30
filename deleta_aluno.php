<?php

include 'db.php';

$id_aluno = $_GET['id_aluno'];

$statement = $conexao->prepare('DELETE FROM ALUNOS WHERE ID_ALUNO=:id_aluno');

$statement->bindParam(':id_aluno', $id_aluno);

$statement->execute();

header('location:index.php?pagina=alunos');