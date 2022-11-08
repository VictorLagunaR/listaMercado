DROP DATABASE bdLista IF EXISTS;
create database IF NOT EXISTS bdLista;

use bdLista;

create table Cadastros(
    IDusuario int not null primary key auto_increment,
    email VARCHAR(40) not null,
    password varchar(40) not null,
    name VARCHAR(35) not null,
    nascimento date not null
);

create table produto(
    IDProduto int not null primary key auto_increment,
    Nome varchar(40) not null,
    categoria varchar(40) not null,
    preco decimal(5,2) not null,
    qtd tinyint not null
);

create table lista(
    IDLista int primary key,
    idCadastro int not null,
    nomeLista varchar(40) not null,
    foreing key(idCadastro) references Cadastros(idCadastro)
);

create table itens(
    idProduto int not null, 
    IDLista int not null,
    foreign key(idProduto) references produto(idProduto),
    foreign key(idlista) references lista(idlista)
);
