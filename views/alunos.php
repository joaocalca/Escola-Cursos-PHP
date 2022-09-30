<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a><br><br>
<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "SELECT * FROM ALUNOS";
        $consulta_alunos = $conexao->query($query); 

        foreach ($consulta_alunos as $aluno) {

        ?>
            <td><span><?= $aluno['NOME_ALUNO'] ?></span></td>
            <td><span><?= $aluno['DATA_NASCIMENTO'] ?></span></td>
            <td><a href="?pagina=inserir_aluno&editar=<?= $aluno['ID_ALUNO']; ?>"><i class="fas fa-user-edit"></i></a></td>
            <td><a href="deleta_aluno.php?id_aluno=<?= $aluno['ID_ALUNO']; ?>"><i class="fas fa-user-times"></i></a></td></tr>
        
        <?php    
        }
        ?>
    </tbody>
</table>