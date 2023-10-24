create table tb_usuaio(
	id int not null primary key auto_increment,
    nome varchar(25) not null,
    email varchar(25) not null,
    senha varchar(100) not null
);

create table tb_tarefa(
	id int not null primary key auto_increment,
    tarefa varchar(50) not null,
    status int(1) default 0,
    id_usuario int not null default 1,
    foreign key(id_usuario) references tb_usuario(id),
    data_cadastrado datetime not null default current_timestamp
);