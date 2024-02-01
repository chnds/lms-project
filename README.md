## Sistema de Gerenciamento de Leads

Este é um sistema desenvolvido em Laravel 10 para gerenciamento de leads. Ele inclui um banco de dados, seeders para popular o banco de dados com dados de exemplo, testes unitários para a API/sistema web, métodos de autenticação nativos do Breeze, e tokens de autenticação para requisições da API.

**Instalação**

1. Clone o repositório do GitLab

2. Instale as dependências do Composer:
composer install

3. Copie o arquivo de configuração .env.example para .env e configure as variáveis de ambiente, como as credenciais do banco de dados.
cp .env.example .env

4. Gere uma chave de aplicativo:
php artisan key:generate

## Configuração do Banco de Dados e Ambiente Local

**Ambiente Local:**

Obs: Certifique-se de ter um ambiente de desenvolvimento local configurado. Recomenda-se o uso de um servidor web local, como o XAMPP, WAMP ou Laravel Valet, para executar o aplicativo Laravel.
Instale o PHP, Composer e Node.js em seu sistema, conforme necessário.

**Banco de Dados:**

Abra o arquivo .env.example no diretório raiz do projeto e renomeie-o para .env.

No arquivo .env, configure as variáveis de ambiente relacionadas ao banco de dados, como DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD, de acordo com as configurações do seu ambiente local. 

**Por exemplo:**
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

Certifique-se de criar um banco de dados vazio com o nome especificado em DB_DATABASE no seu servidor MySQL local.

## Instalação das Dependências

Execute npm install && npm run dev para instalar as dependências do Node.js e compilar os ativos front-end.

**Execução das Migrações e Seeders:**

1. Execute php artisan migrate --seed para executar as migrações do banco de dados e popular o banco com dados de exemplo.

2. Por fim, inicie o servidor local executando php artisan serve.
3. A aplicação Laravel estará disponível em **http://localhost:8000** no seu navegador web.

## Métodos de Autenticação
Este sistema utiliza os métodos de autenticação nativos do Breeze, que oferecem autenticação via sessões para aplicativos web e tokens de autenticação para APIs.

**Autenticação para Aplicativos Web**

O sistema inclui rotas e views para autenticação de usuários. Para acessar essas funcionalidades, basta navegar para as rotas padrão de autenticação, como /login, /register e /forgot-password.

**Autenticação para APIs**

Para autenticar solicitações em sua API, você precisa obter um token de autenticação. Isso pode ser feito enviando uma solicitação POST para a rota /login com as credenciais do usuário. O token gerado deve ser incluído no cabeçalho Authorization de todas as solicitações subsequentes à API.

**Rota para Login:**

http://127.0.0.1:8000/api/login

Corpo da Solicitação (JSON):

{
    "email": "test@example.com",
    "password": "password"
}

**Obs**: Este é um usuário cadastrado e pode ser utilizado após a execução das migrações/seeders para facilitar o acesso.

Certifique-se de incluir o token gerado no cabeçalho Authorization das solicitações subsequentes para autenticar-se com a API. Utilize o esquema de autenticação Bearer:

Authorization: Bearer SEU_TOKEN_AQUI

Dessa forma, você poderá acessar os recursos protegidos pela autenticação da API.

**Cabeçalhos Requeridos**

Para interagir com a API, os seguintes cabeçalhos devem ser incluídos em todas as solicitações:

- `Content-Type`: Deve ser definido como `application/json` para indicar que o corpo da solicitação está no formato JSON.
- `Accept`: Deve ser definido como `application/json` para indicar que o cliente aceita uma resposta no formato JSON.


## Exemplos de Uso API

**Criar um Novo Lead**: Envie uma requisição POST para a rota /api/leads com os dados do lead para criar um novo registro.

**Atualizar um Lead Existente**: Envie uma requisição PUT para a rota /api/leads/{id} com os dados atualizados do lead para atualizar um registro existente.

**Listar Todos os Leads**: Envie uma requisição GET para a rota /api/leads para obter uma lista de todos os leads cadastrados.

**Visualizar Detalhes de um Lead**: Envie uma requisição GET para a rota /api/leads/{id} para obter os detalhes de um lead específico.

**Excluir um Lead**: Envie uma requisição DELETE para a rota /api/leads/{id} para excluir um lead existente.



## Testes Unitários
Este sistema inclui testes unitários para garantir a integridade e o funcionamento adequado das diferentes partes do aplicativo. 

1. Certifique-se de estar na raiz do projeto no terminal.

2. Execute o comando abaixo para executar todos os testes unitários:

**php artisan test**


## Documentação de Arquitetura e Decisões de Design

**Arquitetura e Tecnologias Utilizadas:**

Laravel 10: Framework PHP MVC utilizado para desenvolver o sistema de gerenciamento de leads.
MySQL: Banco de dados relacional para armazenamento dos dados dos leads.
Bootstrap: Framework front-end para criar interfaces responsivas e visualmente atraentes.
jQuery e AJAX: Utilizados para simplificar a manipulação do DOM e permitir requisições assíncronas no lado do cliente.
Decisões de Design:

Padrão MVC: Separou as responsabilidades de modelagem, visualização e controle no desenvolvimento do sistema.
Validação de Dados: Realizada tanto no lado do servidor quanto no cliente para garantir uma experiência de usuário fluida.
Seeders: Criados para popular o banco de dados com dados de exemplo, facilitando o desenvolvimento e teste do sistema.
Testes Automatizados: Garantir a correção e robustez das diferentes partes do aplicativo.

**Segurança e Autenticação:**

Sanctum: Utilizado para autenticação baseada em tokens, garantindo a segurança dos dados dos leads e do sistema como um todo.
