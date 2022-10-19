<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Genre;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create-author', function (Request $request) {
    Author::create([
        'nome' => $request->nome_do_autor,
        'ano_de_nascimento'=> $request->ano_de_nascimento_do_autor,
        'sexo'=> $request->sexo_do_autor,
        'nacionalidade'=> $request->nacionalidade_do_autor
    ]);
    echo "Autor criado com sucesso!";
});

Route::get('list-author/{id}', function ($id) {
    $author = Author::findOrFail($id);
    echo $author->nome;
    echo "<br />";
    echo $author->ano_de_nascimento;
    echo "<br />";
    echo $author->sexo;
    echo "<br />";
    echo $author->nacionalidade;
});

Route::get('edit-author/{id}', function ($id) {
    $author = Author::findOrFail($id);
    return view('edit_author', ['author' => $author]);
});

Route::put('/update-author/{id}', function (Request $request, $id) {
    $author = Author::findOrFail($id);
    $author->nome = $request->nome_do_autor;
    $author->ano_de_nascimento = $request->ano_de_nascimento_do_autor;
    $author->sexo = $request->sexo_do_autor;
    $author->nacionalidade = $request->nacionalidade_do_autor;
    $author->save();
    echo "Autor Atualizado com sucesso!";
});

Route::get('/delete-author/{id}', function ($id) {
    $author = Author::findOrFail($id);
    $author->delete();
    echo "Autor excluido com Sucesso!";
});

/* Editora */

Route::post('/create-publisher', function (Request $request) {
    Publisher::create([
        'nome' => $request->nome_da_editora,
    ]);
    echo "Editora criada com sucesso!";
});

Route::get('list-publisher/{id}', function ($id) {
    $publisher = Publisher::findOrFail($id);
    echo $publisher->nome;
});

Route::get('edit-publisher/{id}', function ($id) {
    $publisher = Publisher::findOrFail($id);
    return view('edit_publisher', ['publisher' => $publisher]);
});

Route::put('/update-publisher/{id}', function (Request $request, $id) {
    $publisher = Publisher::findOrFail($id);
    $publisher->nome = $request->nome_da_editora;
    $publisher->save();
    echo "Editora Atualizada com sucesso!";
});

Route::get('/delete-publisher/{id}', function ($id) {
    $publisher = Publisher::findOrFail($id);
    $publisher->delete();
    echo "Editora excluida com Sucesso!";
});

/* Generos Literarios */

Route::post('/create-genre', function (Request $request) {
    Genre::create([
        'nome' => $request->nome_do_genero_literario,
    ]);
    echo "Genero Literario criado com sucesso!";
});

Route::get('list-genre/{id}', function ($id) {
    $genre = Genre::findOrFail($id);
    echo $genre->nome;
});

Route::get('edit-genre/{id}', function ($id) {
    $genre = Genre::findOrFail($id);
    return view('edit_genre', ['genre' => $genre]);
});

Route::put('/update-genre/{id}', function (Request $request, $id) {
    $genre = Genre::findOrFail($id);
    $genre->nome = $request->nome_do_genero_literario;
    $genre->save();
    echo "Genero Literario Atualizado com sucesso!";
});

Route::get('/delete-genre/{id}', function ($id) {
    $genre = Genre::findOrFail($id);
    $genre->delete();
    echo "Genero Literario excluido com Sucesso!";
});

/* Livros */

Route::post('/create-book', function (Request $request) {
    Book::create([
        'titulo' => $request->titulo_do_livro,
        'ano_de_lancamento' => $request->ano_de_lancamento_do_livro
    ]);
    echo "Livro criado com sucesso!";
});

Route::get('list-book/{id}', function ($id) {
    $book = Book::findOrFail($id);
    echo $book->titulo;
    echo "<br />";
    echo $book->ano_de_lancamento;
});

Route::get('edit-book/{id}', function ($id) {
    $book = Book::findOrFail($id);
    return view('edit_book', ['book' => $book]);
});

Route::put('/update-book/{id}', function (Request $request, $id) {
    $book = Book::findOrFail($id);
    $book->titulo = $request->titulo_do_livro;
    $book->ano_de_lancamento = $request->ano_de_lancamento_do_livro;
    $book->save();
    echo "Livro Atualizado com sucesso!";
});

Route::get('/delete-book/{id}', function ($id) {
    $book = Book::findOrFail($id);
    $book->delete();
    echo "Livro excluido com Sucesso!";
});
