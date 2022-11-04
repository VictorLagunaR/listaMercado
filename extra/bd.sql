create database IF NOT EXISTS Usuarios;

use Usuarios;

create table Cadastros(
    email VARCHAR(40) not null primary key,
    password varchar(40) not null,
    name VARCHAR(35) not null,
    nascimento date not null
);

create table lista IF NOT EXISTS(
    IDLista int not null primary key auto_increment,
    idProduto int not null,
    qtd tinyint not null,
    CONSTRAINT fk_listaProduto foreign key(produto)
    REFERENCES produto(IDProduto)
);

create table produto IF NOT EXISTS(
    IDProduto int not null primary key auto_increment,
    Nome varchar(40) not null,
    categoria varchar(40) not null,
    precoKG decimal(5,2)
):

insert into produto(IDProduto,Nome,categoria,preco)
VALUES(null, "Batata", "Verdura", 1,37);

insert into lista(IDLista,nomeProduto,qtd)
values(null, "Batata", 2);

select (produto.Nome,
        produto.categoria,
        lista.qtd, produto.precoKG,
        lista.qtd * produto.precoKG AS 'Preco total'
        from lista INNER JOIN produtos ON lista.IDProduto = produto.IDProdutos
        where lista.IDLista = :idproduto;
       );
