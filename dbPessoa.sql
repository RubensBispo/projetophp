create database pessoa;

use pessoa;

create table pessoa(
id int not null auto_increment,
nome varchar(100) not null,
sobrenome varchar(100) not null,
idade int,
primary key(id));

insert into pessoa(nome,sobrenome, idade) values('Rubens','Bispo',45);

insert into pessoa(nome,sobrenome, idade) values('Rogerio','Silva',15);

insert into pessoa(nome,sobrenome, idade) values('Roberto','Souza',23);

insert into pessoa(nome,sobrenome, idade) values('Lilian','Borges',31);

insert into pessoa(nome,sobrenome, idade) values('Raquel','Souza',42);