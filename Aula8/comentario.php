<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Comentário</title>
</head>
<body>

    <h1>Comentários recebidos</h1>

    <div>
    <?php
    $nome = $_GET["nome"];
    $website = $_GET["website"];
    $email = $_GET["email"];
    $comentario = $_GET["comentario"];

    /* versão equivalte ao foreach:
    
    echo "<div> Bem vindo $nome</div>";
    echo "<div> $email</div>";
    echo "<div> $website</div>";
    echo "<div> Esse é o seu comentário: $comentario</div> <br>";*/

        foreach($_GET as $chave => $valor){
            echo "$chave: $valor <br>";
        }


    if(str_contains($email, "gmail.com")){
        echo "Você é cliente Google";
    }elseif(str_contains($email, "outlook.com")){
        echo "Você é cliente Microsoft";
    }else{
        echo "";
    }
    ?>
    </div>
    <div>
       <p>Bem vindo(a)
           <?php
            echo "$nome";
           ?>
       </p>
    </div>
    
</body>
</html>