DROP DATABASE IF EXISTS supermercado;
CREATE DATABASE IF NOT EXISTS supermercado DEFAULT CHARSET=utf8 DEFAULT COLLATE=utf8_unicode_ci;
USE supermercado;

CREATE TABLE IF NOT EXISTS vendas_q1(id INT AUTO_INCREMENT PRIMARY KEY, cliente VARCHAR(20) NOT NULL, 
valor_venda DECIMAL(9,2) NOT NULL, quadrimestre int NOT NULL)ENGINE=INNODB;
INSERT INTO vendas_q1(cliente,valor_venda,quadrimestre) 
VALUES("FULANO",8000,1),("BELTRANO",20000,1),("CICLANO",15000,1);

CREATE TABLE IF NOT EXISTS vendas_q2(id INT AUTO_INCREMENT PRIMARY KEY, cliente VARCHAR(20) NOT NULL, 
valor_venda DECIMAL(9,2) NOT NULL, quadrimestre int NOT NULL)ENGINE=INNODB;
INSERT INTO vendas_q2(cliente,valor_venda,quadrimestre) 
VALUES("MARIA",28000,2),("JOSÉ",5000,2),("PAULO",35000,2);

CREATE TABLE IF NOT EXISTS vendas_q3(id INT AUTO_INCREMENT PRIMARY KEY, cliente VARCHAR(20) NOT NULL
, valor_venda DECIMAL(9,2) NOT NULL, quadrimestre int NOT NULL)ENGINE=INNODB;
INSERT INTO vendas_q3(cliente,valor_venda,quadrimestre) 
VALUES("PEDRO",9000,3),("ANDRÉ",52000,3),("MARIA",7000,3);