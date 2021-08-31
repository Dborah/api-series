# api-series
Uma aplicação RESTful para cadastro de séries e episódios e controle de quais episódios já foram assistidos de uma série 

## Características
- [x] Uso de docker para criação dos containers da aplicação
- [x] Estilo arquitetural REST e seus padrões
- [x] Uso do Eloquent para persistir os dados 
- [x] Recursos e rotas definidos com o Lumen 
- [x] Autenticação com tokens JWT

## Banco de dados 
<p align="center">
  <img src="https://github.com/Dborah/api-series/blob/main/uml/api-series.png" alt="uml" />
</p>

## Dependências 
- Docker

## Recursos 

### Série

|Método|URI|Código do Status|Resposta|
|--------|--------|--------|--------|
|GET|`http://localhost:8000/api/series`|200|Buscar séries.|
|GET|`http://localhost:8000/api/series/<int:serie_id>`|200|Buscar por uma série.|
|POST|`http://localhost:8000/api/series`|201|Nova série criada com sucesso.|
|PUT|`http://localhost:8000/api/series/<int:serie_id>`|200|Série atualizado com sucesso.|
|DELETE|`http://localhost:8000/api/series/<int:serie_id>`|204|Série deletada com sucesso.|

### Episódios

|Método|URI|Código do Status|Resposta|
|--------|--------|--------|--------|
|GET|`http://localhost:8000/api/episodios`|200|Buscar Episódios.|
|GET|`http://localhost:8000/api/series/<int:serie_id>/episodios`|200|Busca todos episódios de uma série .|
|POST|`http://localhost:8000/api/episodios`|201|Insere um novo episódio em uma série.|
|PUT|`http://localhost:8000/api/episodios/<int:episodio_id>`|200|Atualiza um episódio de um série.|

### Login

|Método|URI|Código do Status|Resposta|
|--------|--------|--------|--------|
|POST|`http://localhost:8000/api/login`|200|Retorna um access token de autorização.|


## Instalação e Configuração
- Clone ou faça o download deste repositório
- Execute `cp .env.example .env` no Mac/Unix ou `COPY .env.example .env` no Windows
- Execute `docker-compose up -d` para buildar e criar os containers
- Execute `docker exec -it app composer install` para instalar todas as dependências
- Execute `docker exec -it app php artisan migrate` para criar as tabelas
- Finalmente execute `docker exec -it app php artisan db:seed` para popular as tabelas
- Se tudo funcionou corretamente, você pode navegar para `http://localhost:8000/`





