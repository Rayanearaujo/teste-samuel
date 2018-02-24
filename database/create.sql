CREATE DATABASE site;


CREATE TABLE Clientes (
    ID int NOT NULL AUTO_INCREMENT,
    Nome varchar(255) NOT NULL,
    DataDeNascimento varchar(255),
    Cpf varchar(255),
    Telefone varchar(255),
    Email varchar(255),
    Interesse varchar(255),
    PRIMARY KEY (ID)
);