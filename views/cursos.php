<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a><br><br>
<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>Nome Curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "SELECT * FROM CURSOS";
        $consulta_cursos = $conexao->query($query); 

        foreach ($consulta_cursos as $curso) {
            
        ?>

            <td><span><?= $curso['NOME_CURSO'] ?></span></td>
            <td><span><?= $curso['CARGA_HORARIA'] ?></span></td>
            <td><a href="?pagina=inserir_curso&editar=<?= $curso['ID_CURSO'] ?>"><i class="fas fa-edit"></i></a></td>
            <td><a href="deleta_curso.php?id_curso=<?= $curso['ID_CURSO'] ?>"><i class="fas fa-trash-alt"></i></a></td></tr>

        <?php    
        }
        ?>
    </tbody>
</table>