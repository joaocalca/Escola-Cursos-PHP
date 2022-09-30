<?php

$username = "root";
$password = "";

try {

    $conexao = new PDO('mysql:host=localhost;dbname=bdgenesis', $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {

    echo 'Houve um erro na conexao com o banco de dados: ' . $e->getMessage();
    die();
    
}