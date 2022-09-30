<h1 style="text-align:center;">Bem vindo a DogCursos</h1>

<form class="container" method="post" action="login.php">
    <label class="badge bg-secondary">Usuario</label><br>
    <input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control" required><br>
    <label class="badge bg-secondary">Senha</label><br>
    <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" minlength="8" required><br>
    <input type="submit" class="btn btn-success" value="Entrar"><a class="btn btn-success" href="?pagina=registro"
        style="margin-left:10px;">Registre-se</a>
<br>
<?php if(isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos.
    </div>
<?php } ?>