create database IF NOT EXISTS bdLista;

use bdLista;

create table Cadastros(
    email VARCHAR(40) not null primary key,
    password varchar(40) not null,
    name VARCHAR(35) not null,
    nascimento date not null
);

create table produto(
    IDProduto int not null primary key auto_increment,
    Nome varchar(40) not null,
    categoria varchar(40) not null,
    precoKG decimal(5,2) not null,
    qtd tinyint not null
);

create table lista(
    IDLista int primary key,
    nomeLista varchar(40) not null
);

create table itens(
    idProduto int not null foreign key references produto(idProduto),
    IDLista int not null foreign key references lista(idlista)
);

insert into produto(IDProduto,Nome,categoria, qtd)
VALUES(null, "Batata", "Verdura", 2);

insert into produto(IDProduto,Nome,categoria, qtd)
VALUES(null, "tomate", "fruto", 2);

insert into lista(IDLista,nomeLista,idProduto)
values(1, "Mercado", 1);

insert into lista(idlista,idProduto)
values(1,2);

select nomeLista from lista where IDLista = 1;

select produto.Nome,
        produto.categoria,
        produto.qtd,
        produto.precoKG,
        produto.qtd * produto.precoKG AS 'Preco total'
        from lista INNER JOIN produto ON produto.idProduto = lista.IDProduto 
        where lista.idlista = 1;

drop database bdlista;
