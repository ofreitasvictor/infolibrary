<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>Criacao de Livros</title>
</head>
<body>
    <h1>Autores</h1>
    <form action="/create-author" method="POST">
        @csrf
        <label for="">Nome do Autor</label>
        <input type="text" placeholder="Digite o nome do Autor" name="nome_do_autor">
        <br/> <br/>
        <label for="">Ano de Nascimento</label>
        <input type="text" placeholder="Digite o ano de nascimento" name="ano_de_nascimento_do_autor">
        <br/> <br/>
        <label for="">Sexo</label>
        <input type="text" placeholder="Digite o sexo" name="sexo_do_autor">
        <br/> <br/>
        <label for="">Nacionalidade</label>
        <input type="text" placeholder="Digite a nacionalidade" name="nacionalidade_do_autor">
        <br/> <br/>
        <button>Enviar cadastro</button>
    </form>

    <h1>Editoras</h1>
    <form action="/create-publisher" method="POST">
        @csrf
        <label for="">Nome da Editora</label>
        <input type="text" placeholder="Digite o nome da Editora" name="nome_da_editora">
        <br/> <br/>
        <button>Enviar cadastro</button>
    </form>

    <h1>Generos Literarios</h1>
    <form action="/create-genre" method="POST">
        @csrf
        <label for="">Nome do Genero Literario</label>
        <input type="text" placeholder="Digite o nome do Genero Literario" name="nome_do_genero_literario">
        <br/> <br/>
        <button>Enviar cadastro</button>
    </form>

    <h1>Livros</h1>
    <form action="/create-book" method="POST">
        @csrf
        <label for="">Titulo do Livro</label>
        <input type="text" placeholder="Digite o titulo do Livro" name="titulo_do_livro">
        <br/> <br/>
        <label for="">Ano de Lancamento</label>
        <input type="text" placeholder="Digite o ano de lancamento" name="ano_de_lancamento_do_livro">
        <br/> <br/>
        <button>Enviar cadastro</button>
    </form>
</body>
</html>