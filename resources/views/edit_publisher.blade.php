<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editora</title>
</head>
<body>
<form action="/update-publisher/{{ $publisher->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome da Editora</label>
        <input type="text" placeholder="Digite o nome da Editora" name="nome_da_editora" value="{{ $publisher->nome }}">
        <button>Editar Editora</button>
    </form>
</body>
</html>