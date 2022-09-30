<?php 

include 'db.php';

$id_aluno_curso = $_GET['id_aluno_curso'];

$statement = $conexao->prepare('DELETE FROM ALUNOS_CURSOS WHERE ID_ALUNO_CURSO=:id_aluno_curso');

$statement->bindParam(':id_aluno_curso', $id_aluno_curso);

$statement->execute();

header('location:index.php?pagina=matriculas');
