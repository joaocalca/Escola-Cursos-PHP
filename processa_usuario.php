<?php

include "db.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$statement = $conexao->prepare('INSERT INTO USUARIOS(USUARIO, SENHA)
    VALUES(:usuario, :senha)');

$statement->bindParam(':usuario', $usuario);
$statement->bindParam(':senha', md5($senha));

$statement->execute();

header('location:index.php?pagina=home');