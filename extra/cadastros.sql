create database IF NOT EXISTS Usuarios;

use Usuarios;

create table Cadastros(
    email VARCHAR(40) not null primary key,
    password varchar(40) not null,
    name VARCHAR(35) not null,
    nascimento date not null
    );