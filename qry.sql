create database moveis;

use moveis;

create table produtos (
  id int(11) not null primary key,
  descricao varchar(100),
  idcategoria int(11),
  preco float(10, 2)
)