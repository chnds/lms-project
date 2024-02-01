##Sistema de Gerenciamento de Leads

Este é um sistema desenvolvido em Laravel 10 para gerenciamento de leads. Ele inclui um banco de dados, seeders para popular o banco de dados com dados de exemplo, testes unitários para a API/sistema web, métodos de autenticação nativos do Breeze, e tokens de autenticação para requisições da API.

Instalação
Clone o repositório do GitHub:

git clone https://github.com/seu-usuario/nome-do-repositorio.git

Instale as dependências do Composer:

composer install
Copie o arquivo de configuração .env.example para .env e configure as variáveis de ambiente, como as credenciais do banco de dados.

cp .env.example .env
Gere uma chave de aplicativo:

##Configuração do Banco de Dados e Ambiente Local

Preparação do Ambiente Local:

Certifique-se de ter um ambiente de desenvolvimento local configurado. Recomenda-se o uso de um servidor web local, como o XAMPP, WAMP ou Laravel Valet, para executar o aplicativo Laravel.
Instale o PHP, Composer e Node.js em seu sistema, conforme necessário.
Clone o repositório do GitHub para o seu ambiente local.
Configuração do Banco de Dados:

Abra o arquivo .env.example no diretório raiz do projeto e renomeie-o para .env.

No arquivo .env, configure as variáveis de ambiente relacionadas ao banco de dados, como DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD, de acordo com as configurações do seu ambiente local. Por exemplo:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
Certifique-se de criar um banco de dados vazio com o nome especificado em DB_DATABASE no seu servidor MySQL local.

Instalação das Dependências:

Abra um terminal na raiz do projeto e execute o comando composer install para instalar as dependências do PHP.
Em seguida, execute npm install && npm run dev para instalar as dependências do Node.js e compilar os ativos front-end.

Execução das Migrações e Seeders:

No terminal, execute php artisan migrate --seed para executar as migrações do banco de dados e popular o banco com dados de exemplo.
Servir a Aplicação:

Por fim, inicie o servidor local executando php artisan serve. A aplicação Laravel estará disponível em http://localhost:8000 no seu navegador web.

php artisan key:generate
Execute as migrações do banco de dados e os seeders para popular o banco de dados com dados de exemplo:

**php artisan migrate --seed**

Instale as dependências do NPM e compile os ativos:

**npm install && npm run dev**

##Métodos de Autenticação
Este sistema utiliza os métodos de autenticação nativos do Breeze, que oferecem autenticação via sessões para aplicativos web e tokens de autenticação para APIs.

Autenticação para Aplicativos Web
O sistema inclui rotas e views para autenticação de usuários. Para acessar essas funcionalidades, basta navegar para as rotas padrão de autenticação, como /login, /register e /forgot-password.

##Autenticação para APIs
Para autenticação de APIs, o sistema fornece tokens de autenticação. Os tokens podem ser obtidos fazendo uma solicitação POST para a rota /login com as credenciais do usuário. O token gerado deve ser incluído no cabeçalho Authorization para autenticar solicitações subsequentes à API.


Rota: http://127.0.0.1:8000/api/login

Corpo da requisição JSON:

Obs: Este é um usuario cadastrado e pode ser utilizado após executar as migrations/seeders para facilitar o acesso

body{
    {
        "email": "test@example.com",
        "password": "password"
    }

}

##Exemplos de Uso

Aqui estão alguns exemplos de uso das principais funcionalidades do sistema:

**Criar um Novo Lead**: Envie uma requisição POST para a rota /api/leads com os dados do lead para criar um novo registro.

**Atualizar um Lead Existente**: Envie uma requisição PUT para a rota /api/leads/{id} com os dados atualizados do lead para atualizar um registro existente.

**Listar Todos os Leads**: Envie uma requisição GET para a rota /api/leads para obter uma lista de todos os leads cadastrados.

**Visualizar Detalhes de um Lead**: Envie uma requisição GET para a rota /api/leads/{id} para obter os detalhes de um lead específico.

**Excluir um Lead**: Envie uma requisição DELETE para a rota /api/leads/{id} para excluir um lead existente.



##Testes Unitários
Este sistema inclui testes unitários para garantir a integridade e o funcionamento adequado das diferentes partes do aplicativo. Os testes estão localizados no diretório tests/Unit e podem ser executados usando o seguinte comando:

1. Certifique-se de estar na raiz do projeto no terminal.

2. Execute o comando abaixo para executar todos os testes unitários:


**php artisan test**


##Documentação de Arquitetura e Decisões de Design

Arquitetura e Tecnologias Utilizadas:

Laravel 10: Framework PHP MVC utilizado para desenvolver o sistema de gerenciamento de leads.
MySQL: Banco de dados relacional para armazenamento dos dados dos leads.
Bootstrap: Framework front-end para criar interfaces responsivas e visualmente atraentes.
jQuery e AJAX: Utilizados para simplificar a manipulação do DOM e permitir requisições assíncronas no lado do cliente.
Decisões de Design:

Padrão MVC: Separou as responsabilidades de modelagem, visualização e controle no desenvolvimento do sistema.
Validação de Dados: Realizada tanto no lado do servidor quanto no cliente para garantir uma experiência de usuário fluida.
Seeders: Criados para popular o banco de dados com dados de exemplo, facilitando o desenvolvimento e teste do sistema.
Testes Automatizados: Escritos com PHPUnit para garantir a correção e robustez das diferentes partes do aplicativo.
Segurança e Autenticação:

Sanctum: Utilizado para autenticação baseada em tokens, garantindo a segurança dos dados dos leads e do sistema como um todo.