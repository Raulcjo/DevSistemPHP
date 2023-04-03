<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade A</title>
</head>
<body>
    <!-- 
        A.Construir um algoritmo que leia 2 números e efetue a adição. 
    Caso o valor da soma seja maior que 10, este deverá ser apresentando somando-se a ele mais 8; 
    Se o valor da soma seja menor ou igual a 10, este deverá ser apresentado subtraindo-se 5;
    -->
    
    <?php
        $num1 = $_POST["Numero1"];
        $num2 = $_POST["Numero2"];
        $soma = ($num1 + $num2);
        $somamais = ($soma + 10);
        $somamenos = ($soma - 8);
    ?>

    <?php
        
        if($soma <= 10){
            echo "Seu resultado é $somamenos";
        }else{
            echo " Seu resultado é $somamais";
        }
    ?>

</body>
</html>