<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade C</title>
</head>
<body>
<!--   
C.Entrar com nome, genero e idade de uma pessoa. Se a pessoa tiver mais que 25 anos,
 imprimir nome, o genero,e a mensagem: "Você pode se cadastrar". 
 Caso contrário, imprimir nome, o genero, e a mensagem: "Você não pode se cadastrar";
-->

    <?php
        $nome = $_POST["nome"];
        $genero = $_POST["genero"];
        $idade = $_POST["idade"];

    ?>

    <?php
    if($idade > 25){
            echo "$nome, é do gênero $genero e tem $idade anos, está apto(a) para se cadastrar no sistema";
        }else{
            echo "Você, $nome é do $genero não está apto para se cadastrar no sitema";
        }
    ?>

</body>
</html>