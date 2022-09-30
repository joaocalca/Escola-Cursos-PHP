<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir novo curso</h1>
<form method="post" action="processa_curso.php"><br>
    <label class="badge bg-secondary">Nome do Curso</label><br>
    <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" required>
    <br><br>
    <label class="badge bg-secondary">Carga Horária</label><br>
    <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária" required>
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir curso">
</form>

<?php } else { 
    
        $statement = $conexao->prepare('SELECT * FROM CURSOS WHERE ID_CURSO=:id_curso');

        $statement->bindParam(':id_curso', $_GET['editar']);
        $statement->execute();

        $curso = $statement->fetch();
    
    ?>

    <h1>Editar curso</h1>
    <form method="post" action="edita_curso.php"><br>
        <input type="hidden" name="id_curso" value="<?= $curso['ID_CURSO'] ?>">

        <label class="badge bg-secondary">Nome do Curso</label><br>
        <input class="form-control" type="text" name="nome_curso"
            placeholder="Insira o nome do curso" value="<?= $curso['NOME_CURSO'] ?>" required
        > 
        <br><br>
        
        <label class="badge bg-secondary">Carga Horária</label><br>
        <input class="form-control" type="text" name="carga_horaria" 
            placeholder="Insira a carga horária" value="<?= $curso['CARGA_HORARIA'] ?>" required
        >
        <br><br>
        
        <input class="btn btn-success" type="submit" value="Editar curso">
    </form>

    
<?php } ?>