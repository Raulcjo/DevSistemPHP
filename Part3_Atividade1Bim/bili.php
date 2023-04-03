<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade B</title>
</head>
<body>
<!--   
B.Entrar com 3 números e imprimi-los em ordem decrescente 
    (suponha números diferentes:  exemplo: 1 - 9 - 4);
-->

    <?php
        $num1 = $_POST["Numero1"];
        $num2 = $_POST["Numero2"];
        $num3 = $_POST["Numero3"];
        

   // echo "$num1 $num2 $num3";

    if($num1 < $num2 && $num1 < $num3){
        echo " $num1";
        if($num2 < $num3){
            echo "$num2 $num3";
        }else{
            echo "$num3 $num2";
        }
    }else if($num2 < $num1 && $num2 < $num3){
        echo "$num2";
        if($num1 < $num3){
            echo "$num1 $num3";
        }else{
            echo "$num3 $num1";
        }
    }else if($num3 < $num1 && $num3 < $num2){
        echo "$num3";
        if($num1 < $num2){
            echo "$num1 $num2";
        }else{
            echo "$num2 $num1";
        }
    }

       
    ?>
</body>
</html>