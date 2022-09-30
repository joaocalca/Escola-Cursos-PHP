<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir novo aluno</h1>
<form method="post" action="processa_aluno.php"><br>
    <label class="badge bg-secondary">Nome do Aluno</label><br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" required>
    <br><br>
    <label class="badge bg-secondary">Data de Nascimento</label><br>
    <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" required>
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir aluno">
</form>

<?php } else {

        $statement = $conexao->prepare('SELECT * FROM ALUNOS WHERE ID_ALUNO=:id_aluno');

        $statement->bindParam(':id_aluno', $_GET['editar']);
        $statement->execute();

        $aluno = $statement->fetch();
    
    ?>
    
    <h1>Editar aluno</h1>
    <form method="post" action="edita_aluno.php"><br>
        <input type="hidden" name="id_aluno" value="<?= $aluno['ID_ALUNO']; ?>">

        <label class="badge bg-secondary">Nome do Aluno</label><br>
        <input class="form-control" type="text" name="nome_aluno" 
            placeholder="Insira o nome do aluno" value="<?= $aluno['NOME_ALUNO']; ?>" required
        >
        <br><br>

        <label class="badge bg-secondary">Data de Nascimento</label><br>
        <input class="form-control" type="text" name="data_nascimento" 
            placeholder="Insira a data de nascimento" value="<?= $aluno['DATA_NASCIMENTO']; ?>" required
        >
        <br><br>

        <input class="btn btn-success" type="submit" value="Editar aluno">
    </form>


<?php } ?>