# php-002-laravel

composer - `composer global require "laravel/installer=~1.1"`

`composer create-project laravel/laravel estoque "5.0."`
`
$ cd estoque
$ composer install
$ php artisan serve`

e tudo correu bem, a mensagem `Laravel development server started on http://localhost:8000`

Acesse essa URL no navegador de sua preferência para ver o resultado.

alterando a namespace `php artisan app:name estoque`



Configurando Ambiente:

 - Criando um novo projeto - laravel new (nome projeto)

 - Pra subir o server e testar, usamos o php artisan serve dentro da pasta do projeto
 
 - Alterando o namespace do projeto 'php artisan app:name (nome projeto)'

--------------------------------
## Algumas Pastas
app: nela ficam seus modelos, views e controllers, que serão bem detalhados na próxima aula. Em poucas palavras, é onde boa parte do seu código vai ficar. Ela possui uma série de subdiretórios, como Commands, Console, Http, Events, entre outros. Não se preocupe em entender o significado de cada um deles agora, vamos vê-los melhor conforme formos precisando.

config: como o nome já indica, é onde ficam os arquivos de configuração do seu projeto. Se você precisar alterar as configurações de cache, e-mail, banco de dados, entre outras, já sabe onde encontrar.

public: é a pasta pra onde seu web server vai apontar. Lá fica o arquivo index.php, que aponta para sua aplicação. Além disso, é comum colocarmos os arquivos css, imagens, javascript e todos os demais arquivos públicos nesse diretório.

vendor: é onde fica o source code do Laravel, plugins e outras dependências. Tudo que você usar de terceiros (bibliotecas, frameworks etc.) deve ficar nela.

-------------------------
## MVC

 - Model é a camada onde ficam nossas regras de negócio, nossas entidades e classes de acesso ao banco de dados.

 - View é a responsável por apresentar as páginas e outros tipos de resultado para o usuário (ou mesmo para outros sistemas, que se comunicam). É a resposta que o framework envia para o navegador, que normalmente é um HTML.

 - Controller é quem cuida de receber as requisições web e decidir o que fazer com elas. Nessa camada definimos quais modelos devem ser executados para determinada ação e para qual view vamos encaminhar a resposta. Em outras palavras, essa camada quem faz o link entre todas as outras.
-----------------------------
 - Legibilidade: pois no lugar de várias funções anônimas e inúmeras linhas de código em um mesmo arquivo, tudo fica muito bem distribuído. Cada comportamento em seu devido lugar, em classes e métodos com nomes bem definidos.

 - Manutenibilidade: pois se tudo está bem organizado e encapsulado, não precisaremos mexer em um arquivo com 1500 linhas sempre que um problema aparecer. A listagem de produtos parou de funcionar? Sei que tenho que ir a um método do ProdutoController. Não consigo adicionar usuários? Sei que tenho que verificar na classe UsuarioController.
