## Iniciando projeto e-commerce com Laravel10

Criando projeto de estudo de e-commerce a partir das aulas do canal TheCoderBr, acompanhar as aulas seguindo os endereços e os commits 
sempre irão mencionar o endereço e a aula correspondente.

## Aula 1 Abertura
- [Conhecendo o projeto, instalando dependências](https://www.youtube.com/watch?v=TglghPMqZPg&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=1).

Criando a pagina inicial O(home.blade.php) acrescentando os cards dos produtos com uso do Bootstrap

- [  Criando Models e Migrations e  arquivos do BD](https://www.youtube.com/watch?v=dAoZn0aj3BE&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=2).

Criando as dependências de Banco de dados a partir do comando php artisan make:model xxx -m para criar modelos de Categoria e migrates. Migrates são classes do laravel onde se organiza toda a extrutura do Banco de Dados como nome da tabela campos etc. Criado => Caegoria, Produto, Usuario, Endereço, Pedido, Itens_Pedido

- [  Criando Campos das Tabelas no BD usndo artisan](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=3).

Criando o campos do Banco de dados a partir do comando php artisan make:model xxx -m
Criando os campos nas migrations antes de gerar no banco de dados através do artisan 

- [  Criando rotas de acesso as paginas ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=4).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=5)

Criando as rotas para Home , Categorias e Cadastro... Criando arquivos de controle e as Views cadastrar ,carrinho, categoria, layout...  Vamos adicionar os produtos no banco de dados através de migrations e exibir na tela inicial do projeto.
 
 - [  Criando a  página de categorias ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=6).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=7)

 Criando a página de categorias, gravando as categorias no banco de dados e carregando na view categoria
 Carregando os produtos de acordo com sua categoria , imagens e descrição dos produtos.

 - [  Criando carrinho de comparas e suas funcionalidades ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=8).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=9).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=10)

 Criando o carrinho de compras e salvar os itens em uma sessão do e-commerce.

 - [  Criando carrinho de comparas e suas funcionalidades ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=11).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=12).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=13)

 Criando a tela de cadastro de usuário para o e-commerce
 Criando  o item para remover valor do carrinho de compras em laravel
 Criando a funcionalidade excluir item no carrinho
 Criando a funcionalidade criar cadastro no DB
 - [  Criando carrinho de comparas e suas funcionalidades ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=14).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=15).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=16)

 Corrigindo erros de mascara de CEP e CPF e falha na segurança acrescentando HASH na senha
 
 - [  Criando tela de login do usuario e suas funcionaluidades ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=17).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=15).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=16)
 
 Criando tela de login e suas funcionalidades
 Criando politicas de autenticação na pasta config tabela auth.php
 Criando mensagens de usuário logado ou não
 Crinado mascara para login.(cpf) 
 Manipular o sistema depois que o usuário esta logado
 Como alterar uma propriedade direto pelo laravel antes da inserção
 - [  Criando a tela de consulta do histórico dos pedidos ](https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=21).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=22).(https://www.youtube.com/watch?v=b2uQVxYkRLI&list=PLC7cuCjn9-OWsC2omIZdY4cLm4_WMzwQE&index=23)
 
 Criando a tela de consulta do histórico dos pedidos
 



- **[]()**

