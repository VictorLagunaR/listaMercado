create database IF NOT EXISTS Usuarios;

use Usuarios;

create table IF NOT EXISTS Cadastros(
    email VARCHAR(40) not null,
    password varchar(40) not null,
    name VARCHAR(35) not null,
    nascimento date not null,
    CONSTRAINT pk_cadastro primary key(email,password)
    );