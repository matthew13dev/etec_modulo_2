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
    ('Eduardo Pereira', '(51) 92345-6789', 'eduardo.pereira@gmail.com'),
    ('Fernanda Lima', '(61) 91234-5678', 'fernanda.lima@uol.com.br'),
    ('Gabriel Almeida', '(71) 97654-3210', 'gabriel.almeida@gmail.com'),
    ('Helena Sousa', '(81) 92345-6789', 'helena.sousa@yahoo.com'),
    ('Igor Fernandes', '(91) 99876-5432', 'igor.fernandes@outlook.com'),
    ('Joana Mendes', '(11) 98765-4321', 'joana.mendes@hotmail.com'),
    ('Kleber Nunes', '(21) 91234-5678', 'kleber.nunes@gmail.com'),
    ('Larissa Martins', '(31) 97654-3210', 'larissa.martins@yahoo.com'),
    ('Marcelo Antunes', '(41) 92345-6789', 'marcelo.antunes@gmail.com'),
    ('Natalia Castro', '(51) 99876-5432', 'natalia.castro@outlook.com'),
    ('Otávio Rocha', '(61) 98765-4321', 'otavio.rocha@hotmail.com'),
    ('Patrícia Araújo', '(71) 91234-5678', 'patricia.araujo@gmail.com'),
    ('Quintino Barros', '(81) 97654-3210', 'quintino.barros@yahoo.com'),
    ('Rafaela Souza', '(91) 92345-6789', 'rafaela.souza@outlook.com'),
    ('Sandro Vieira', '(11) 99876-5432', 'sandro.vieira@gmail.com'),
    ('Tatiana Carvalho', '(21) 98765-4321', 'tatiana.carvalho@yahoo.com'),
    ('Ulisses Moraes', '(31) 91234-5678', 'ulisses.moraes@outlook.com'),
    ('Vanessa Ribeiro', '(41) 97654-3210', 'vanessa.ribeiro@gmail.com'),
    ('William Santos', '(51) 92345-6789', 'william.santos@hotmail.com'),
    ('Xavier Monteiro', '(61) 99876-5432', 'xavier.monteiro@outlook.com'),
    ('Yasmin Oliveira', '(71) 98765-4321', 'yasmin.oliveira@gmail.com'),
    ('Zélia Farias', '(81) 91234-5678', 'zelia.farias@yahoo.com'),
    ('André Gomes', '(91) 97654-3210', 'andre.gomes@gmail.com'),
    ('Bruna Costa', '(11) 92345-6789', 'bruna.costa@outlook.com'),
    ('Célio Silva', '(21) 99876-5432', 'celio.silva@gmail.com'),
    ('Diana Neves', '(31) 98765-4321', 'diana.neves@yahoo.com');

;


CREATE TABLE login (
    id int not null auto_increment,
    email varchar(50) unique not null,
    pass varchar(50) not null,

    constraint pk_login primary key(id);
)

insert into login (email, pass) values ("root@email.com", "admin123");