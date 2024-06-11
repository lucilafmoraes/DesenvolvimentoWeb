CREATE TABLE vendedor(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(80),
    percentual_comissao float   

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE unique index idx_vendedor_nome on vendedor(nome);

INSERT INTO vendedor(nome, percentual_comissao)
VALUES("Lu", 9.2);

INSERT INTO vendedor(nome, percentual_comissao)
VALUES("Ana", 7.5);