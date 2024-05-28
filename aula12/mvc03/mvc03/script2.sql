Use supermercado;
DROP TABLE IF EXISTS vendas;
CREATE TABLE IF NOT EXISTS vendas(id INT AUTO_INCREMENT PRIMARY KEY, cliente VARCHAR(20) NOT NULL
, valor_venda DECIMAL(9,2) NOT NULL, quadrimestre int NOT NULL)ENGINE=INNODB;

INSERT INTO vendas(cliente, valor_venda,quadrimestre) 
SELECT cliente, valor_venda,quadrimestre FROM vendas_q1
UNION
SELECT cliente, valor_venda,quadrimestre FROM vendas_q2
UNION
SELECT cliente, valor_venda,quadrimestre FROM vendas_q3;