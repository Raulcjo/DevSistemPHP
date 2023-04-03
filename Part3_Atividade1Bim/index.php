<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule com o pai</title>
</head>
<body>
   <!-- ATIVIDADE 3
    Desenvolva os seguintes exercícios:

    A.Construir um algoritmo que leia 2 números e efetue a adição. 
    Caso o valor da soma seja maior que 10, este deverá ser apresentando somando-se a ele mais 8; 
    Se o valor da soma seja menor ou igual a 10, este deverá ser apresentado subtraindo-se 5;

    B.Entrar com 3 números e imprimi-los em ordem decrescente 
    (suponha números diferentes:  exemplo: 1 - 9 - 4);
    
    C.Entrar com nome, genero e idade de uma pessoa. Se a pessoa tiver mais que 25 anos, imprimir nome, o genero,
     e a mensagem: "Você pode se cadastrar". Caso contrário, imprimir nome, o genero, e a mensagem: "Você não pode se cadastrar";

    D.Ler um número inteiro entre 1 e 12 e imprimir o mês correspondente.
     Caso o número seja fora desse intervalo, informar que não existe mês correpsondente a este número;-->


    <h2>Escolha qual das operações abaixo quer realisar:</h2>

    <h4>A. Edetuar a adição ente dois números:</h4>
    <div>
    <!--letra A-->
    <form action="acont.php" method="post">

        Número 1:<input type="number" placeholder="Numero 1" name="Numero1">
        <p></p>
        Número 2:<input type="number" placeholder="Numero 2" name="Numero2">
        <p></p>
        <input class=button type="submit">

    </form>
    </div>
    <p></p>

    <h4>B. Colocar 3 números em ordem de crescente:</h4>
    <div>
    <!--letra B-->
    <form action="bili.php" method="post">

        Número 1:<input type="number" placeholder="Numero 1" name="Numero1">
        <p></p>
        Número 2:<input type="number" placeholder="Numero 2" name="Numero2">
        <p></p>
        Número 3:<input type="number" placeholder="Numero 3" name="Numero3">
        <p></p>
        <input class=button type="submit">

    </div> 
    </form>
    <p></p>

    <h4>C. Verificar se pode se cadastrar no Sistema:</h4>
     <!--letra C-->
    <form action="idade.php" method="post">

        Nome:<input type="caracter" placeholder="Nome" name="nome">
        <p></p>
        Gênero:<input type="caracter" placeholder="Gênero" name="genero">
        <p></p>
        Idade:<input type="number" placeholder="Idade" name="idade">
        <p></p>
        <input class=button type="submit">
    </form>

    <p></p>
    <h4>D. Verificar qual o número de cada mês:</h4>
         <!--letra D-->
    <form action="mes.php" method="post">

        Mês:<input type="number" placeholder="Mês" name="mes">
        <p></p>
        <input class=button type="submit">
   
    </form>
      <p></p>
    
</body>
</html>