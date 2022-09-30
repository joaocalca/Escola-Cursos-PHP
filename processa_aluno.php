<?php

include "db.php";

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$statement = $conexao->prepare('INSERT INTO ALUNOS(NOME_ALUNO, DATA_NASCIMENTO)
    VALUES(:nome_aluno, :data_nascimento)');

$statement->bindParam(':nome_aluno', $nome_aluno);
$statement->bindParam(':data_nascimento', $data_nascimento);

$statement->execute();

header('location:index.php?pagina=alunos');