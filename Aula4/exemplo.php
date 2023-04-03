<?php
    
    $idade = 18;
    $nome = "Raul Costa";

    // Comentário de uma linha
    /*
    Comentário de várias linhas
    */

    echo '1. Nome '.$nome.' sua idade é '.$idade.' anos <br>'; //1° forma de escrever na página web 
    echo "1. Nome $nome sua idade é $idade anos <br>"; //2° forma de escrever na página web 
    echo "<h2> Operadores matemáticos </h2>";
    $valora = 2;
    $valorb = 3;

    //Operador de soma +
    $soma = $valora + $valorb;
    echo "Soma: $valora + $valorb = $soma<br>";

    //Operador de subitração -
    $sub = $valorb - $valora;
    echo "Subitração: $valora - $valorb = $sub<br>";

    //Operador de multiplicação *
    $mult = $valora * $valorb;
    echo "Multiplicação: $valora * $valorb = $mult<br>";

    //Operador de divisão /
    $divisao = $valora / $valorb;
    echo "Divisão: $valora / $valorb = $divisao<br>";

    //Operador de pontênciação **
    $potencia = $valora ** $valorb;
    echo "Potência: $valora ** $valorb = $potencia<br>";

    //Opreaador de resto da divisão %
    $resto = $valora %  $valorb;
    echo "Resto: $valora % $valorb = $resto<br>";

    //Dicas de aula 
    echo gettype($divisao);


?>