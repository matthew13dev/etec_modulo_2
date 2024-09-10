create table tb_alunoConcluinte( ID int(11) not null auto_increment, nome VARCHAR(45) not null, nota1 float, nota2 float, nota3 float, nota4 float,  constraint PK_alunoConcluinte primary key(id) );

insert into tb_alunoConcluinte  (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES 
('Eduarda', '10', '10', '9', '10'),
('Igo', '10', '8', '10', '10'),
('Guilherm', '10', '9', '8', '7'),
('Henrique', '9', '9', '8', '7'),
('Nilson', '10', '9', '10', '9'),
('Ana', '9', '9', '8', '8'),
('Amanda', '8', '9', '9', '8'),
('Carlos', '6', '6', '5', '6'),
('Pedro', '8', '8', '8', '7');