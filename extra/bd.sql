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
    Nome varchar(40) not null
);

create table lista(
    IDLista int primary key auto_increment,
    IDusuario int not null,
    nomeLista varchar(40) not null,
    foreign key(IDusuario) references Cadastros(IDusuario)
);

create table itens(
    idProduto int not null, 
    IDLista int not null,
    foreign key(idProduto) references produto(idProduto),
    foreign key(idlista) references lista(idlista)
);

insert into Cadastros values(0, 'laguna.vitorc@gmail.com', 'voutirar10','victinho', 2004/03/16);
insert into produto values(0, 'batata'),
(0, 'alface'),
(0, 'tomate');

insert into lista values
(0, 1 , 'mercado do mes');

insert into lista values
(0, 1 , 'mercado da semana');

insert into itens values
(1,1),
(2,1),
(3,1);

insert into itens values
(1,2),
(2,2),
(3,2);

-- select para pegar a lista e o nome dela perante o usuário
select lista.nomeLista, itens.idLista from itens 
inner join lista 
    on lista.IDLista = itens.idLista 
inner join cadastros
    on lista.IDusuario = cadastros.IDusuario
where lista.IDusuario = 1
group by idLista;

-- select para pegar os produtos numa lista
select itens.idproduto,
itens.idlista,
produto.nome
from itens 
inner join produto
    on itens.idproduto = produto.idproduto
inner join lista
    on itens.idlista = lista.idlista
where  lista.idlista = 1 and lista.IDusuario = 1;
