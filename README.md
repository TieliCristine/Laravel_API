# Backend - Laravel API

## Introdução

Este documento fornece uma visão geral do backend do projeto, construído com o framework Laravel. O backend expõe uma API segura para gerenciar os recursos da aplicação.

## Tecnologias Utilizadas

- **PHP 8.2**
- **Laravel 11**
- **Laravel Fortify** (Autenticação)
- **Laravel Sanctum** (API Token Authentication)
- **Laravel Breeze** (Starter Kit)
- **MySQL** (Banco de dados)
- **PestPHP** (Testes)

---

## Instalação e Configuração

### 1. Clonar o Repositório
```sh
 git clone https://github.com/seu-repositorio.git
 cd seu-repositorio
```

### 2. Instalar Dependências
```sh
composer install
```

### 3. Criar e Configurar o Arquivo `.env`
```sh
cp .env.example .env
```
Edite o arquivo `.env` para configurar banco de dados e outras credenciais.

### 4. Gerar Chave da Aplicação
```sh
php artisan key:generate
```

### 5. Configurar Banco de Dados
Crie um banco de dados MySQL e edite o `.env` com as credenciais.

```sh
php artisan migrate --seed
```

### 6. Iniciar o Servidor
```sh
php artisan serve
```

---

## Estrutura do Projeto

```
app/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   └── Requests/
├── Models/
├── Database/
│   ├── migrations/
│   ├── seeders/
├── Routes/
│   ├── api.php
│   ├── web.php
└── Tests/
```

---

## Endpoints Principais

### Autenticação (Laravel Sanctum)

#### Registro
```
POST /api/register
```
**Requisição:**
```json
{
  "name": "Usuário Teste",
  "email": "teste@email.com",
  "password": "senha123"
}
```

#### Login
```
POST /api/login
```
**Requisição:**
```json
{
  "email": "teste@email.com",
  "password": "senha123"
}
```

**Resposta:**
```json
{
  "token": "seu-token-aqui"
}
```

#### Logout
```
POST /api/logout
```
**Requisição:**
```
Header: Authorization: Bearer {token}
```

---

## Testes

O backend possui testes automatizados utilizando PestPHP.

```sh
php artisan test
```

---

## Deploy

### 1. Gerar Build
```sh
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
```

### 2. Configurar Banco de Dados em Produção
```sh
php artisan migrate --force
```

### 3. Configurar Permissões
```sh
chmod -R 775 storage bootstrap/cache
```

---

## Licença
Este projeto está licenciado sob a MIT License.

