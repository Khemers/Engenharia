DROP DATABASE IF EXISTS Pesquisa;

CREATE DATABASE Pesquisa DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE Pesquisa;

DROP USER IF EXISTS 'Admin'@'localhost';

CREATE USER 'Admin'@'localhost' IDENTIFIED BY '12345'; 

GRANT SELECT, INSERT, UPDATE, DELETE ON Pesquisa.* TO 'Admin'@'localhost';



create table projetos(
  idProjetos INTEGER AUTO_INCREMENT PRIMARY KEY,
  professorProjetos VARCHAR(100) NOT NULL,
  nomeProjetos VARCHAR(100) NOT NULL,
  statusProjetos BOOLEAN NOT NULL,
  temaProjetos VARCHAR(100) NOT NULL,
  areaconhecimentoProjetos VARCHAR(100) NOT NULL
);

create table usuarios(
  idUsuarios INTEGER AUTO_INCREMENT PRIMARY KEY,
  nomeUsuarios VARCHAR(100) NOT NULL,
  tipoUsuarios VARCHAR(100) NOT NULL,
  senhaUsuarios VARCHAR(100) NOT NULL
);

create table participantes(
  idParticipantes INTEGER AUTO_INCREMENT PRIMARY KEY,
  nomeParticipantes VARCHAR(100) NOT NULL,
  projetoParticipantes VARCHAR(100) NOT NULL
);