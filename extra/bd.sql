create database IF NOT EXISTS Usuarios;

use Usuarios;

create table Cadastros(
    email VARCHAR(40) not null primary key,
    password varchar(40) not null,
    name VARCHAR(35) not null,
    nascimento date not null
);

create table lista(
    idLista tinyint not null primary key auto_increment,
    nomeProduto VARCHAR(30) not null,
    qtd tinyint not null 
);

insert into lista(idLista,nomeProduto,qtd)
VALUES(null,"batata", 2);