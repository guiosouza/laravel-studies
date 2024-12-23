# Rotas

Vamos aprender aqui o básico sobre rotas no Laravel.

## Arquivo `web.php`
Durante essas lições, vamos explorar como cada arquivo do Laravel funciona. Porém, por agora, vamos focar no arquivo responsável por gerenciar as rotas do back-end: `web.php`.

Uma das grandes vantagens do Laravel é a organização e legibilidade. Veja este exemplo de rota no arquivo `web.php`:

```php
Route::get('/', function () {
    return view('welcome');
});
```

Neste exemplo:
- Criamos uma rota do tipo **GET** para o caminho `/`.
- A rota executa uma função que retorna uma _view_ chamada `welcome`.
- Essa _view_ está localizada em `/resources/views/welcome.blade.php`.

### Retornando outros tipos de resposta
Não estamos limitados a retornar apenas _views_. Podemos também retornar:

1. **Uma string:**
   ```php
   Route::get('/about', function () {
       return 'Returning a string from the about route';
   });
   ```
   Ao acessar `/about`, veremos o texto simples no navegador.

2. **Um objeto JSON (simulando uma API):**
   ```php
   Route::get('/about', function () {
       return ['name' => 'John Doe', 'age' => 30];
   });
   ```
   Neste caso, acessar `/about` retorna uma resposta JSON com os dados fornecidos.

### Observação importante
Repare que as rotas acima estão definidas com o caminho `/about`. Para acessar essas respostas, basta navegar até `http://localhost:8000/about` (ou conforme o servidor local configurado).

Experimente modificar o caminho e as respostas para entender como as rotas funcionam. Essa é a base para construir aplicações dinâmicas com Laravel!

