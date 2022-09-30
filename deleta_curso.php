<?php

include 'db.php';

$id_curso = $_GET['id_curso'];

$statement = $conexao->prepare('DELETE FROM CURSOS WHERE ID_CURSO=:id_curso');

$statement->bindParam(':id_curso', $id_curso);

$statement->execute();

header('location:index.php?pagina=cursos');