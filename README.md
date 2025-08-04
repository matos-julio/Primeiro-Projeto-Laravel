# Blog com Filtro por Categoria (Laravel)

Um blog simples com filtro por categoria usando Laravel.  
Projeto desenvolvido como prática para aprender os fundamentos do framework.

## 🚀 Funcionalidades

- Listagem de posts armazenados no banco de dados
- Filtro por categoria usando Eloquent
- Exibição de post individual com rota dinâmica
- Interface simples usando Tailwind CSS
- Navegação entre posts

## 🛠️ Tecnologias utilizadas

- [Laravel 12](https://laravel.com/)
- [PostgreSQL](https://www.postgresql.org/)
- [Tailwind CSS](https://tailwindcss.com/)
- [Vue.js](https://vuejs.org/) *(uso básico)*

## 📚 Objetivo

Esse projeto foi feito como primeiro contato com Laravel, para aprender:
- Relacionamentos entre modelos
- Rotas com parâmetro dinâmico (Route Model Binding)
- Filtros em consultas com Eloquent
- Exibição dinâmica com Blade
- Organização de um projeto MVC

## 📦 Instalação

> ⚠️ Este projeto foi feito apenas para fins de estudo local.  
> Assuma que você já tem PHP, Composer, Laravel e PostgreSQL configurados.

```bash
# Clone o repositório
git clone https://github.com/matos-julio/Primeiro-Projeto-Laravel
cd Primeiro-Projeto-Laravel

# Instale as dependências
composer install

# Copie o .env de exemplo e configure o banco de dados
cp .env.example .env
php artisan key:generate

# Configure o banco (ex: PostgreSQL)
# Lembre de criar o banco manualmente ou ajustar os dados no .env

php artisan migrate --seed

# Rode o servidor local
php artisan serve
