<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generos Literarios</title>
</head>
<body>
<form action="/update-genre/{{ $genre->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome do Genero Literario</label>
        <input type="text" placeholder="Digite o nome do Genero Literario" name="nome_do_genero_literario" value="{{ $genre->nome }}">
        <button>Editar Genero Literario</button>
    </form>
</body>
</html>