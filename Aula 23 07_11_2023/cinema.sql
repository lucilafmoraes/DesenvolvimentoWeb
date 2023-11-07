DROP DATABASE IF EXISTS cinema;
CREATE DATABASE IF NOT EXISTS cinema CHARSET=utf8 COLLATE=utf8_unicode_ci;
USE cinema;
CREATE TABLE filmes (
    ID int auto_increment primary key,
    titulo varchar(40) not null,
    nota decimal(9,1) not null,
    unique index idx_filmes_titulo(titulo)
) engine=INNODB;

INSERT INTO filmes(id, titulo, nota)
VALUES(1, "o protetor", 8.1),
(2, "ESPOSA DE MENTIRINHA", 7.5),
(3, "INTERSTELAR", 9.3),
(4, "OS SEM FLORESTA", 8.3),
(5, "O GRANDE TRUQUE", 8.9);

select * from filmes;


