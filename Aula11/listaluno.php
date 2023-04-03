<?php
    include 'conectaBanco.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <?php 
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];

    $sql = " INSERT INTO Aluno (nome, endereco) VALUES
            ('$nome', '$endereco')";
            echo "$sql";
    $mysql->close() 
    ?>
</body>
</html>