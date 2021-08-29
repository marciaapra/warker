# W16 - Projeto Warker
Este projeto utiliza Laravel 8 e banco de dados MySQL.

## Banco de dados

- Crie uma instância do MySQL na sua máquina.
- Crie uma base de dados com o nome "warker"
- No arquivo .env (caso não exista ainda, crie utilizando como base o env.example), verifique se os dados de conexão com o banco de dados está correta de acordo com as configurações do seu banco de dados
```
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=warker

DB_USERNAME=root

DB_PASSWORD=YOUR_DB_PASSWORD
```

## Configurações e download

Faça o download do projeto em sua máquina e execute o seguinte comando na raiz no projeto:
```
composer install
```
Caso ainda não tenha criado o arquivo .env, crie utilizando como base o arquivo env.example.Depois para criar as tabelas no banco de dados, execute o seguinte comando:
```
php artisan migrate
```
Para popular alguns registros no banco de dados, execute o seguinte comando:
```
php artisan db:seed
```
