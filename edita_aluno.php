<?php

include "db.php";

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$statement = $conexao->prepare('UPDATE ALUNOS SET NOME_ALUNO=:nome_aluno, DATA_NASCIMENTO=:data_nascimento WHERE ID_ALUNO=:id_aluno');

$statement->bindParam(':nome_aluno', $nome_aluno);
$statement->bindParam(':data_nascimento', $data_nascimento);
$statement->bindParam(':id_aluno', $id_aluno);

$statement->execute();

header('location:index.php?pagina=alunos');