# php-002-laravel

Configurando Ambiente:

 - Criando um novo projeto - laravel new (nome projeto)

 - Pra subir o server e testar, usamos o php artisan serve

app: nela ficam seus modelos, views e controllers, que serão bem detalhados na próxima aula. Em poucas palavras, é onde boa parte do seu código vai ficar. Ela possui uma série de subdiretórios, como Commands, Console, Http, Events, entre outros. Não se preocupe em entender o significado de cada um deles agora, vamos vê-los melhor conforme formos precisando.

config: como o nome já indica, é onde ficam os arquivos de configuração do seu projeto. Se você precisar alterar as configurações de cache, e-mail, banco de dados, entre outras, já sabe onde encontrar.

public: é a pasta pra onde seu web server vai apontar. Lá fica o arquivo index.php, que aponta para sua aplicação. Além disso, é comum colocarmos os arquivos css, imagens, javascript e todos os demais arquivos públicos nesse diretório.

vendor: é onde fica o source code do Laravel, plugins e outras dependências. Tudo que você usar de terceiros (bibliotecas, frameworks etc.) deve ficar nela.