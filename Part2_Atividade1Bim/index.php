<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hoje.css">
    <title>Review de hoje</title>
</head>
<body>
 <!-- ATIVIDADE 2
    Crie uma página WEB de formulário, para cadastro (o que cadastrar? é de livre escolha do aluno).


    A. A página deve conter entradas de texto, raddio button, checkbox e DropDown.
    B. Acrescente estilo CSS a essa página em um arquivo .css externo;-->


    <div >
    <h2>O que vamos resenhar hoje?</h2>
    </div>
    <p></p>
    <div>
    <h3><p>Olá tudo bem? Seja bem-vindo ao Review de hoje,<br>
        site o qual você vai poder resenhar tudo o que estiver consumindo de mídia,<br>
         independênte do que ela for. <br> Por favor insira seu nome, e-mail e crie uma senha.
    </p></h3>
    </div>
    <p></p>
    <div>
        <p>
            <form action="#" method="get">
   
                <div class="seja">
                <label for="e-mail">E-mail</label>
                <input type="email" name="e-mail" placeholder="E-mail">
                <p></p>
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Nome completo">
                <p></p>
                <label for="senha">Senha</label>
                <input type="passoword" name="senha" placeholder="Senha">
                <p></p>
                <label for="confimar">Comfirmar a Senha</label>
                <input type="passoword" name="confirmar" placeholder="Comfirmar a Senha">
                </div>
                <p></p>
                <div class="seja">
                <input type="button" value="Enviar">
                </div>
                <p></p>


                <p>Qual é o nome da mídia que vai resenhar?</p>
                <div class="seja">
                <label for="nomemidia">Insira o nome aqui:</label>
                <input type="text" name="nomemidia" placeholder="nome da midia">
                </div>


                <p>Selecione qual é o tipo de mídia que vai resenhar:</p>
                <div class="seja">
                <select name="select">
                    <option value="valor1">Livro</option>
                    <option value="valor2">Série</option>
                    <option value="valor3">Novela</option>
                    <option value="valor4">Filme</option>
                    <option value="valor5">Minissérie</option>
                    <option value="valor6">Podcast</option>
                </select>
                </div>


                <p>De qual gênero faz parte?</p>
                <div class="seja">
                <label for="fantasia">Fantasia</label>
                <input type="checkbox" nome="fantasia">
                <label for="acao">Ação</label>
                <input type="checkbox" nome="acao">
                <label for="romance">Romance</label>
                <input type="checkbox" nome="romance">
                <label for="ficcao">Ficção</label>
                <input type="checkbox" nome="ficcao">
                <label for="ficcaociet">Ficção Científica</label>
                <input type="checkbox" nome="ficcaociet">
                <label for="biografica">Biográfica</label>
                <input type="checkbox" nome="biografica">
                <label for="outro">Outro</label>
                <input type="checkbox" nome="outro">
                <p></p>
                </div>


                <p>Número de estrelas:</p>
            <div class="estrela">
                <label 1>*</label>
                <input type="radio" name="estrela">
                <label 2>**</label>
                <input type="radio" name="estrela">
                <label 3>***</label>
                <input type="radio" name="estrela">
                <label 4>****</label>
                <input type="radio" name="estrela">
                <label 5>*****</label>
                <input type="radio" name="estrela">
            </div>
                <p></p>
               
                <p>Resenha/Review:</p>
                <label for="resenha"></label>


                <textarea id="resenha" name="resenha" cols="50" rows="20">


                </textarea>
                <p></p>
                <input type="button" value="Salvar">
        </p>
    </div>
   



</body>
</html>