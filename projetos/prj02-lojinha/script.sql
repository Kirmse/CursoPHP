CREATE TABLE admin(
    id int primary key auto_increment,
    email varchar(100) unique,
    senha varchar(100)
);

CREATE TABLE produto(
    id int primary key auto_increment,
    nome varchar(200),
    valor float,
    imagem varchar(200)
);

INSERT INTO admin(email,senha) VALUES("kirmse2005@gmail.com","123");