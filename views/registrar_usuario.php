<h1 style="text-align: center;">Registro</h1>

<form method="post" action="processa_usuario.php">
    <label class="badge bg-secondary">Usuário</label><br>
    <input class="form-control "type="text" name="usuario" placeholder="Insira o seu nome de usuário" required><br>
    <label class="badge bg-secondary">Senha</label><br>
    <input class="form-control" type="password" name="senha" placeholder="Insira a senha do seu usuário" required minlength="8"><br>
    <input class="btn btn-success" type="submit" value="Registrar">
</form>