<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
<form action="/update-book/{{ $book->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Titulo do Livro</label>
        <input type="text" placeholder="Digite o titulo do Livro" name="titulo_do_livro" value="{{ $book->titulo }}">
        <label for="">Ano de Lancamento</label>
        <input type="text" placeholder="Digite o ano de lancamento" name="ano_de_lancamento_do_livro" value="{{ $book->ano_de_lancamento }}">
        <br/> <br/>
        <button>Editar Livro</button>
    </form>
</body>
</html>