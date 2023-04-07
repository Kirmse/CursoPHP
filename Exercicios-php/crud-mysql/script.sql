 --Comandos de SQL no Mysql
-- Criar uma base de dados, comando executado apenas 1x

CREATE DATABASE myDB;

-- Antes de fazer outras alterações é necessário estar dentro de uma Base de DAdos
-- Necessário clicar no menu da direita no baanco de dados criado mydb

-- criar uma tabela para gravar pessoas
-- nome e email

CREATE TABLE pessoa(
   id int PRIMARY KEY auto_increment,
   nome varchar(100),
   email varchar(100)
);

-- comando para gravar um NOVO registro na tabela

INSERT INTO pessoa(nome, email) VALUES('isaque kirmse','kirmse2005@gmail.com');