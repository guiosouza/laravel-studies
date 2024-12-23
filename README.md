# Laravel Learning Repository

Este repositório é dedicado ao aprendizado básico de Laravel, ajudando iniciantes a darem os primeiros passos com este poderoso framework PHP.

## Pré-requisitos
Antes de iniciar, é recomendado que você tenha conhecimento básico sobre:
- **Lógica de programação**: saber como funcionam condições, laços e variáveis.
- **PHP**: compreensão de sintaxe e operações básicas com PHP.

## Index (Lessons)
Here you will find the base files for the environment:
- [00 - Base Ambient For Development](https://github.com/guiosouza/laravel-studies/tree/main/00-development-base-code)
- [01 - Creating Routes](https://github.com/guiosouza/laravel-studies/tree/main/01-creating-routes)

## Começando
A maneira mais simples de iniciar é utilizando o [Laravel Herd](https://laravel.com/docs/herd), uma ferramenta que facilita a configuração de ambiente, incluindo:
- **Banco de dados**
- **Versões do PHP**
- **Básico de HTM e CSS**

Siga os passos abaixo para configurar e iniciar seu projeto Laravel:

### 1. Instalar Laravel Herd
Baixe e instale o Laravel Herd no site oficial: [Laravel Herd](https://laravel.com/docs/herd).

### 2. Criar um novo projeto Laravel
Com o Herd configurado, crie seu projeto utilizando o Composer:
```bash
composer create-project laravel/laravel nome-do-projeto
```

### 3. Configurar as dependências
Navegue até a pasta do seu projeto e instale as dependências:
```bash
cd nome-do-projeto
composer install
```

### 4. Configurar o .env
O arquivo `.env` é usado para configurar o ambiente do seu projeto. Certifique-se de configurar:
- Conexão com o banco de dados (exemplo para o MySQL):
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nome_do_banco
  DB_USERNAME=usuario
  DB_PASSWORD=senha
  ```

### 5. Gerar a chave da aplicação
Rode o seguinte comando para gerar a chave da aplicação:
```bash
php artisan key:generate
```

### 6. Iniciar o servidor
Inicie o servidor local:
```bash
php artisan serve
```
Abra o navegador e acesse `http://127.0.0.1:8000` para ver seu projeto Laravel em ação!

## Comandos úteis do Artisan
O Laravel possui o Artisan, uma interface de linha de comando poderosa. Aqui estão alguns comandos úteis:

- **Criar um controlador:**
  ```bash
  php artisan make:controller NomeDoController
  ```

- **Criar uma migration:**
  ```bash
  php artisan make:migration nome_da_migration
  ```

- **Rodar migrations:**
  ```bash
  php artisan migrate
  ```

- **Limpar caches da aplicação:**
  ```bash
  php artisan cache:clear
  ```

## Contribuições
Contribuições são bem-vindas! Se você tem ideias ou melhorias para este repositório, sinta-se à vontade para abrir uma _issue_ ou enviar um _pull request_.

## Recursos adicionais
- [Documentação oficial do Laravel](https://laravel.com/docs)
- [Comunidade Laravel no Discord](https://discord.gg/laravel)

Aprenda, experimente e divirta-se desenvolvendo com Laravel!

