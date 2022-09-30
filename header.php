<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/96e07dc36a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>DogCursos</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matriculas">Matrículas</a>
                <?php if(isset($_SESSION['login'])) { ?>
                <a href="logout.php"><?php echo $_SESSION['usuario']; ?>(sair)</a>
                <?php } ?>
            </div>
        </div>  
    </header>
    <div id="conteudo" class="container">