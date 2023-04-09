-- comando de SQL no MySQL
-- Criar uma base de dados, comando executado apenas uma vez
CREATE DATABASE myDB;

-- Antes de fazer outras alterações é necessário estar dentro de uma base de dados
-- Necessário clicar no menu a esquerda no gerenciador criado "myDB"
-- Observe que deve mostrar o nome do banco de dados na aba SQL do gerenciador

-- criando uma tabela para gravar dados de pessoas
-- os dados serão: nome, email e cpf

-- comando:
CREATE TABLE pessoas (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(100),
    email varchar(100),	
	cpf varchar(11)
);
-- o varchar foi 14 pois contando os numeros e pontos no cpf dão 14

-- comando para gravar um NOVO registro na tabela
INSERT INTO pessoas(nome, email, cpf) VALUES ('andre','costa@gmail.com','011.657.258-58');
