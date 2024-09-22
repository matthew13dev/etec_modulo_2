create database user;
use user;

create table user(
    id int auto_increment not null,
    nome varchar(200) not null,
    telefone varchar(13) not null unique,
    email varchar(200) not null unique,

    constraint pk_user primary key(id);
);

INSERT INTO user (nome, telefone, email) VALUES
    ('Ana Silva', '(11) 98765-4321', 'ana.silva@gmail.com'),
    ('Carlos Santos', '(21) 99876-5432', 'carlos.santos@yahoo.com'),
    ('Beatriz Oliveira', '(31) 91234-5678', 'beatriz.oliveira@hotmail.com'),
    ('Daniel Costa', '(41) 97654-3210', 'daniel.costa@outlook.com'),
    ('Eduardo Pereira', '(51) 92345-6789', 'eduardo.pereira@gmail.com')
;