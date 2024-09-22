create database user;
use user;

create table user(
    id int auto_increment not null,
    nome varchar(200) not null,
    telefone varchar(13) not null unique,
    email varchar(200) not null unique,

    constraint pk_user primary key(id);
);