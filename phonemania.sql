CREATE DATABASE phonemania;

use DATABASE phonemania;

CREATE TABLE login (
  nome varchar(15) NOT NULL,
  cognome varchar(15) NOT NULL,
  username varchar(16) NOT NULL primary key,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE preferiti (
  user varchar(16) NOT NULL,
  nome varchar(255) NOT NULL,
  brand varchar(255) NOT NULL,
  immagine blob NOT NULL,
   FOREIGN KEY (user) REFERENCES login(username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;