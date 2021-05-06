# Blog

## Sobre:
- Projeto desenvolvido em CakePHP com a intenção de conhecer melhor esta ferramenta.
- É seguido o tutorial do próprio framework <<https://book.cakephp.org/2/pt/tutorials-and-examples/blog/blog.html>> que irá cobrir a criação de uma aplicação de blog simples.
    - Baixar e instalar o Cake;
    - Criar e configurar o banco de dados;
    - Criar a lógica da aplicação suficiente para listar, adicionar, editar e deletar posts do blog.

- Este projeto opera junto com o Docker e Docker Compose para assim poder utilizar um servidor web rodando (Apache) juntamente com um servidor do banco de dados (PostgreSQL).

## Para rodar:
- É necessário possuir o Docker e Docker Compose instalado em sua máquina.
- Em seguida, acesse pelo terminal o diretório em que o arquivo **docker-compose.yml** se encontra e execute seguinte comando:

> $ docker-compose up -d

- Por fim, abra seu navegador e, na barra de URL, acesse:

> localhost:8089
