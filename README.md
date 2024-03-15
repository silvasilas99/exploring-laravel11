# Getting deeper on Laravel 11
    Visão Geral do Projeto: 
    
     Projeto backend construído em Laravel 11 para compreender mais profundamente aspectos do framework,
     focando apenas em funcionalidades. 
    
## Instruções de Utilização: 
      Clone o repositório do projeto
        git clone https://github.com/silvasilas99/exploring-laravel11/

      Vá ao diretório onde o projeto se encontra
          cd ./exploring-laravel11

      Crie um arquivo database.sqlite, o qual será utilizado como DB da aplicação
          touch ./database/database.sqlite

      Utilize o Composer para instalar os pacotes necessários para a aplicação rodar
          composer install

      Crie um arquivo .env com base no .env.example
          cp ./.env.example .env

      Crie a nova chave para rodar a aplicação localmente
          php artisan key:generate 

      Crie as migrations no DB
          php artisan migrate

      Realize o seeding no DB
          php artisan db:seed

      Utilize o comando de teste para executar as funções criadas
          php artisan admin:test
          # Observe que existem códigos comentados, e que existem chamadas à função dd(). 
          # Para realizar um teste adequado, descomente apenas o que você deseja executar, salve o arquivo, então execute o comando novamente.
    
## Estrutura do Projeto (apenas os arquivos "autorais" foram listados):
    .
    ├── README.md
    ├── app
    │   ├── Console
    │   │   └── Commands
    │   │       └── TestCommand.php
    │   ├── Models
    │   │   ├── Category.php
    │   │   ├── Product.php
    │   │   └── User.php
    │   ├── Observers
    │   │   └── UserObserver.php
    ├── composer.json
    ├── composer.lock
    ├── database
    │   ├── database.sqlite # Deve ser incluído
    │   ├── factories
    │   │   ├── CategoryFactory.php
    │   │   └── ProductFactory.php
    │   ├── migrations
    │   │   ├── 2024_03_14_132426_create_users_table.php
    │   │   ├── 2024_03_14_191346_create_products_table.php
    │   │   └── 2024_03_14_191353_create_categories_table.php
    │   └── seeders
    │       └── DatabaseSeeder.php
    ├── storage
    │   └── logs
    │       └── laravel.log

