<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <form action="/update-author/{{ $author->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome do Autor</label>
        <input type="text" placeholder="Digite o nome do Autor" name="nome_do_autor" value="{{ $author->nome }}">
        <br/> <br/>
        <label for="">Ano de Nascimento</label>
        <input type="text" placeholder="Digite o ano de nascimento" name="ano_de_nascimento_do_autor" value="{{ $author->ano_de_nascimento }}">
        <br/> <br/>
        <label for="">Sexo</label>
        <input type="text" placeholder="Digite o sexo" name="sexo_do_autor" value="{{ $author->sexo }}">
        <br/> <br/>
        <label for="">Nacionalidade</label>
        <input type="text" placeholder="Digite a nacionalidade" name="nacionalidade_do_autor" value="{{ $author->nacionalidade }}">
        <br/> <br/>
        <button>Editar Autor</button>
    </form>
</body>
</html>