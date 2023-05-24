create table usuario (
    id int primary key auto_increment,
    email varchar (200) unique,
    senha varchar (100),
    );

create table tarefa (
    id int primary key auto_increment,
    fazer varchar (500),
    id_usuario int
); 