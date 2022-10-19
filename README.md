# Feature

### Features

 - Criação, listagem, edição, e exclusão de livro
 - Criação, listagem, edição e exclusão de Autor
 - Criação, listagem, edição e exclusão de Gênero
 - Criação, listagem, edição e exclusão de Editora

# Instalação
Para rodar esse projeto voce ira precisar ter:

1.  PHP - v7.4.30
2.  Laravel - v8.83.25
3.  Xampp - v7.4.30
4.  Composer - v2.4.2

```bash
# Clone este repositório
$ git clone https://github.com/ofreitasvictor/infolibrary.git

# Acesse a pasta do projeto no terminal/cmd
$ cd infolibrary

# Instale as dependências
$ composer install

# Execute o Xampp 

# Cria um banco de dados no MySql acessando No Browser
# Voce pode escolher a base de dados Ex: infolibrary
$ localhost/phpMyAdmin/

# Entre no projeto com seu editor de preferencia e configure o seu arquivo .env com as credencias do banco de dados

# Rode as migrations
$ php artisan migrate

# Execute a aplicação
$ php artisan serve


# Tecnologias
As seguintes ferramentas foram usadas na construção do projeto:
 - [PHP](https://www.php.net) 
 - [Laravel](https://laravel.com) 
 - [Composer](https://getcomposer.org)
 - [MySql](https://www.mysql.com) 
