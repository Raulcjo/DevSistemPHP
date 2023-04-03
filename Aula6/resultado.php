<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><!---Atividade 1--->
    <?php 
    $valor1 = $_POST["Numero1"]; 
    $valor2 = $_POST["Numero2"];
    $soma = ($valor1 + $valor2);

    $somafinal = ($soma * 3);
    
    ?>

    <p>
     Sua situação é
     <?php
        if($valor1 == $valor2){
            echo " essa $somafinal";
        }else{
            echo "essa $soma";
        }
     ?>
    </p>
    </div>

    <div> <!---Atividade 2--->
        <?php 
        $texto = "raul";
        $subtexto = "ul";
        if(str_contains($texto, $subtexto)){
            echo "$subtexto esta em $texto";
        }else{
            echo "$subtexto não esta em $texto";
        }
        ?>
    </div>

    <div></div><!---Atividade 3--->
</body>
</html>