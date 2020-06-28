create database if not exists `montaja` charset=utf8_general_ci collate=utf8;

create table if not exists `fotos`(
`id` int(11) auto_increment not null,
`pedido` int(11) not null,
`endereco` varchar(255) not null,
`cidade` varchar(100) not null,
`montador` varchar(100) not null,
`telefone` varchar(20) not null,
`data` date null,
`observacao` text(1000) null,
`url_foto` varchar(255) not null,
primary key(`id`)
)engine=InnoDB char set=utf8;
  
create table if not exists `audios`(
`id` int(11) not null auto_increment,
`pedido` int(11) not null,
`observacao` text(1000) null,
`url_audio` varchar(255),
primary key(`id`)
)engine=InnoDb charset=utf8;