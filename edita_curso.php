<?php

include "db.php";

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$statement = $conexao->prepare('UPDATE CURSOS SET NOME_CURSO=:nome_curso, CARGA_HORARIA=:carga_horaria WHERE ID_CURSO=:id_curso');

$statement->bindParam(':nome_curso', $nome_curso);
$statement->bindParam(':carga_horaria', $carga_horaria);
$statement->bindParam(':id_curso', $id_curso);

$statement->execute();

header('location:index.php?pagina=cursos');