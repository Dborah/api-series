# api-series
Uma aplicação pra controle de quais episódios já foram assistidos de uma série. 

## Características
- [x] Uso de docker para criação dos containers da aplicação
- [x] Estilo arquitetural e seus padrões
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






