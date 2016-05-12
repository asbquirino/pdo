## Curso: Trilhando caminhos com PHP ##

### Módulo: PHP com PDO ###

**Fase 1 do projeto**

1. Criando um arquivo .sql

    Crie um arquivo .sql para colocar a criação de seu banco de dados e tabelas para facilitar futuramente a correção do seu projeto, então o arquivo ficará assim:

	CREATE DATABASE ...

	CREATE TABLE ...

	INSERT INTO ...

    Você criará um banco de dados no MYSQL e uma tabela “alunos” com id (chave primária), nome (varchar(255)),
	nota (int) e inserirá 20 registros variados na tabela “alunos”, coloque estes 20 inserts no nosso arquivo .sql. 

2. Crie um sistema para listar todos os alunos e também para listar os que têm as três maiores notas.