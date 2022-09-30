<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matrícula</a><br><br>
<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Nome Curso</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
        
        $query = "SELECT ALUNOS_CURSOS.ID_ALUNO_CURSO, ALUNOS.NOME_ALUNO, CURSOS.NOME_CURSO FROM ALUNOS, CURSOS, ALUNOS_CURSOS
            WHERE ALUNOS_CURSOS.ID_ALUNO = ALUNOS.ID_ALUNO AND ALUNOS_CURSOS.ID_CURSO = CURSOS.ID_CURSO";
        $consulta_matriculas = $conexao->query($query);

        foreach ($consulta_matriculas as $matricula) {

        ?>
            <td><span><?= $matricula['NOME_ALUNO'] ?></span></td>
            <td><span><?= $matricula['NOME_CURSO'] ?></span></td>
            <td><a href="deleta_matricula.php?id_aluno_curso=<?= $matricula['ID_ALUNO_CURSO']; ?>">
            <span style="color: Tomato;"><i class="fas fa-trash-alt"></i></span></a></td></tr>
        
        <?php
        }
        ?>
    </tbody>
</table>