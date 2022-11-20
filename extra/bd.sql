create database bdLista;

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
