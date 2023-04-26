@extends('layouts.header')

@section('title','Documentação completa')

@section('content')

<div style="padding: 30px;" class="text-light documentSection ">

<h4> Documentação da API de Serviços para Terceiros </h4>
<p>
A  API de Serviços para Terceiros é uma interface de programação de aplicativos que permite que outras empresas integrem facilmente os serviços da nossa empresa em seus próprios aplicativos ou plataformas. A API possui três endpoints principais: <strong> /service </strong>, <strong> /users </strong> e <strong> /subscription </strong>.
</p>
<h4> Autenticação </h4>
<p>
A autenticação na API é feita utilizando o protocolo OAuth 2.0. Cada empresa que deseja integrar os serviços da nossa empresa deve se registrar e obter um token de acesso válido para fazer as requisições. O token de acesso é gerado pelo servidor de autenticação da nossa empresa e é necessário para acessar todos os endpoints da API.
</p>
<h4> Endpoint /service </h4>
<p>
O <strong> endpoint /service </strong> é responsável por fornecer informações sobre os serviços que a nossa empresa oferece. O endpoint é acessado com uma requisição HTTP GET e retorna um objeto JSON contendo informações sobre cada serviço, como nome, descrição, preço e outras informações relevantes.
</p>
<h5> GET /service</h5>
<p>
Retorna informações sobre os serviços disponíveis.
</p>
Parâmetros<br>
Nenhum.
<p>
Exemplo de requisição
</p>
<div class="cod">
<code>
	GET /service HTTP/1.1<br>
Host: api.minhaempresa.com<br>
Authorization: Bearer {token_de_acesso}

</code>
</div>
<br>
Exemplo de resposta<br>
<div class="cod">
<code>
	HTTP/1.1 200 OK<br>
Content-Type: application/json<br>

{<br>
    "services": [<br>
        {<br>
            "name": "Serviço 1",<br>
            "description": "Descrição do serviço 1",<br>
            "price": 100.0,<br>
            "category": "Categoria 1"<br>
        },<br>
        {<br>
            "name": "Serviço 2",<br>
            "description": "Descrição do serviço 2",<br>
            "price": 200.0,<br>
            "category": "Categoria 1"<br>
        },<br>
        {<br>
            "name": "Serviço 3",<br>
            "description": "Descrição do serviço 3",<br>
            "price": 300.0,<br>
            "category": "Categoria 2"<br>
        }<br>
    ]<br>
}<br>

</code>
</div>
<h5> Endpoint /users</h5>
<p>
O <strong> endpoint /users </strong>é responsável por fornecer informações sobre os usuários da nossa empresa. O endpoint é acessado com uma requisição HTTP GET e retorna um objeto JSON contendo informações sobre cada usuário, como nome, e-mail, telefone e outras informações relevantes.
</p>
<p>
<strong> GET /users </strong>
Retorna informações sobre os usuários da nossa empresa.
</p>
Parâmetros<br>
Nenhum.<br>
<p>
Exemplo de requisição
</p>
<div class="cod">
<code>
GET /users HTTP/1.1 <br>
Host: api.minhaempresa.com<br>
Authorization: Bearer {token_de_acesso}<br>
</code>
</div>
Exemplo de resposta<br>
<div class="cod">
<code>
HTTP/1.1 200 OK<br>
Content-Type: application/json<br>

{<br>
    "users": [<br>
        {<br>
            "name": "Usuário 1",<br>
            "email": "usuario1@minhaempresa.com",<br>
            "Cod": "0112131HA042"<br>
        },<br>
        {<br>
            "name": "Usuário 2",<br>
            "email": "usuario2@minhaempresa.com",<br>
            "phone": "9122131HA042"<br>
        },<br>
        {<br>
            "name": "Usuário 3",<br>
            "email": "usuario3@minhaempresa.com",<br>
            "phone": "0112131HA042"<br>
        }<br>
    ]<br>
}<br>


</code>
</div>
<h5> Endpoint /subscription </h5>
<p>
O <strong> endpoint /subscription </strong> é responsável por gerenciar as assinaturas dos usuários aos nossos serviços. Este endpoint permite que os usuários façam assinaturas dos serviços oferecidos pela empresa.
</p>
<p>
Método: POST
</p>
<p>
Parâmetros:<br>

user_id (obrigatório): ID do usuário que está fazendo a assinatura.<br>
service_id (obrigatório): ID do serviço que está sendo assinado.<br>
duration (opcional): Duração da assinatura em meses. O valor padrão é 1 mês.<br>
</p>
<p>
	Exemplo de requisição:
	</p>

	<div class="cod">
<code>
	POST /subscription HTTP/1.1<br>
Host: api.empresa.com<br>
Content-Type: application/json<br>
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IlVzZXIgMSIsImlhdCI6MTUxNjIzOTAyMn0.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c<br>

{<br>
  "user_id": 123,<br>
  "service_id": 456,<br>
  "duration": 6<br>
}<br>
</code>
</div>
<p>
	Exemplo de resposta:
</p>
<div class="cod">
<code>
HTTP/1.1 201 Created<br>
Content-Type: application/json<br>

{<br>
  "subscription_id": 789,<br>
  "user_id": 123,<br>
  "service_id": 456,<br>
  "start_date": "2022-05-01",<br>
  "end_date": "2022-10-31"<br>
}<br>

</code>
</div>
<p>
Códigos de resposta:
</p>
<ul>

<li>
	201 Created: A assinatura foi criada com sucesso.
</li>
<li>400 Bad Request: O corpo da requisição está faltando algum parâmetro obrigatório ou contém algum valor inválido.
</li>
<li>
	401 Unauthorized: O usuário não está autenticado.
</li>
<li>
	403 Forbidden: O usuário não tem permissão para fazer essa requisição.
</li>
<li>
	404 Not Found: O usuário ou serviço especificado não existe.
</li>
<li>500 Internal Server Error: Houve um erro interno no servidor.</li>


</ul>


</div>
@endsection