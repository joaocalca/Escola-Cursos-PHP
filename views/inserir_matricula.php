<h1>Inserir nova matrícula</h1>

<form method="post"action="processa_matricula.php">
    <br>
    <p class="badge bg-secondary">Selecione o aluno</p><br>
    <select class="form-select" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php

        $query_alunos = "SELECT * FROM ALUNOS";
        $consulta_alunos = $conexao->query($query_alunos);

        foreach ($consulta_alunos as $aluno) {
            echo '<option value="'.$aluno['ID_ALUNO'].'">'.$aluno['NOME_ALUNO'].'</option>';
        }
        ?>  
    </select>

    <br><br>
    
    <p class="badge bg-secondary">Selecione o curso</p><br>
    <select class="form-select" name="escolha_curso">
        <option default>Selecione um curso</option>
        <?php

        $query_cursos = "SELECT * FROM CURSOS";
        $consulta_cursos = $conexao->query($query_cursos);

        foreach ($consulta_cursos as $curso){
            echo '<option value="'.$curso['ID_CURSO'].'">'.$curso['NOME_CURSO'].'</option>';
        }
        ?>
    </select>

    <br><br>
    
    <input class="btn btn-success" type="submit" value="Matricular aluno no curso">
</form>