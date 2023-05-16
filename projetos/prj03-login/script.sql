CREATE TABLE usuario(
    id int primary key auto_increment,
    email varchar(100) unique,
    senha varchar(100)
);

CREATE TABLE tarefa(
    id int primary key auto_increment,
    id_usuario INT NOT NULL,
    conteudo TEXT,
    foreign key (id_usuario) references usuario(id)
);