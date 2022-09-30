<?php

include "db.php";

$usuario = addslashes($_POST['usuario']);

# Criptografando a senha
$senha = md5($_POST['senha']);

$query = "SELECT * FROM USUARIOS WHERE USUARIO=:usuario AND SENHA=:senha";

$statement = $conexao->prepare($query);
$statement->bindParam(':usuario', $usuario);
$statement->bindParam(':senha', $senha);

$statement->execute();

if($statement->rowCount() > 0){
    
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;

    header('location:index.php');

} else {
    header('location:index.php?erro');
}