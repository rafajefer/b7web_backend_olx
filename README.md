# Escopo e regras acordadas:

## Escopo acordado

Backend simples, parecido com OLX.
Projeto do curso B7web (https://alunos.b7web.com.br/curso/laravel/laravel9-olx-apresentacao-do-projeto)

## Requisitos

- PHP 8.1
- MySQL 8.0
- ou Docker 27.04+


## Instalação

### Inicie o projeto com Docker
Para iniciar todos os containers, utilize o docker compose
```
cd backend_olx
docker compose up -d --build
docker exec -it server /bin/bash
```
Para iniciar os containers separadamento, basta rodar:
```
cd backend_olx
docker build -t server-image:latest -f Dockerfile.server .
docker run -it --name server-container server-image:latest /bin/bash

docker build -t client-image:latest -f Dockerfile.client .
docker run -it --name client-container client-image:latest /bin/bash
```

Para acessar o bash de um dos containers
```
docker exec -it server /bin/sh
docker exec -it server /bin/bash
```
Para acessar o log do container
```
docker logs server
```
Para acessar o banco de dados
```
docker exec -it db mysql -u root -proot backend_olx
```
Executando as migrations
```
docker exec -it server php artisan migrate
```
Limpando o banco de dados
```
docker exec -it server php artisan migrate:fresh
```
Criando um controller
```
docker exec -it server php artisan make:controller CategoriesController
```
Criando uma request
```
docker exec -it server php artisan make:request CreateUserRequest
```
Criando um seeder
```
docker exec -it server php artisan make:seeder CategoriesSeeder
```
Acessando o tinker
```
docker exec -it server php artisan tinker

docker exec -it server /bin/bash // ou
tinker
```
## Usuário padrão de login
Para acessar o sistema, basta acessar http://localhost:8000/login e digitar as credênciais abaixo:
```
john.doe@email.com.br
123123
```
## Erros comuns 

Caso já tenha containers criados, é bom removê-los
```
docker rm server db server phpmyadmin
```
