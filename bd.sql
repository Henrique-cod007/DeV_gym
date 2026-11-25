Create database gym_db;

use gym_db;

Create table cadastro_aluno(
Id int primary key auto_increment,
Nome varchar(70) not null,
Cpf varchar(21) not null, 
Email varchar(90) not null,
Telefone varchar(20) not null,
Data_nascimento date not null,
modalidade_1 enum("Boxe","Musculacao","Pilates","Natacao"),
modalidade_2 enum("Boxe","Musculacao","Pilates","Natacao"),
forma_pagamento enum("Pix","cartao credito","boleto"),
Data_criacao datetime not null
)default char set utf8;

Create table avisos(
Id int primary key auto_increment,
Nome varchar(70) not null,
Telefone varchar(20) not null,
Email varchar(70) not null,
Assunto varchar (60) not null,
Descricao text not null,
Data_criacao datetime  not null DEFAULT CURRENT_TIMESTAMP
)default char set utf8;

MODIFY Data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;