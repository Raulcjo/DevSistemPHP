<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade D</title>
</head>
<body>
<!--  
D.Ler um número inteiro entre 1 e 12 e imprimir o mês correspondente.
 Caso o número seja fora desse intervalo, 
 informar que não existe mês correpsondente a este número;
-->
  
<?php

$mes = $_POST["mes"];
 echo " $mes";


switch($mes){

    case 1:
        echo " = janeiro"; 
        break;
    case 2:
        echo " = fevereiro"; 
            break;
    case 3:
     echo " = março"; 
        break;
    case 4:
        echo " = abril";
        break;
    case 5:
	    echo " = maio";
	    break;
    case 6:
	    echo " = junho";
	    break; 
    case 7:
	    echo " = julho";
	    break;
    case 8:
	    echo " = agosto";
	    break;
    case 9:
	    echo " = setembro";
	    break;
    case 10:
        echo " = outubro";
        break;
    case 11:
        echo " = novembro";
        break;
    case 12:
        echo " = dezembro";
        break;
     default:
        echo " Esse mês não existe, digite outro número";   

}

?>
</body>
</html>